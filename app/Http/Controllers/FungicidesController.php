<?php

namespace App\Http\Controllers;

use App\Crop;
use App\Dose;
use App\Fungicide;
use App\Http\Requests\AcaricideRequest;
use App\Http\Requests\AddCropDoseRequest;
use App\Manufacturer;
use App\Pesticides;
use App\PestSubstance;
use App\Substance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FungicidesController extends Controller
{
    public function index()
    {
        $fungicides = Pesticides::where('pesticideId', 1)->where('isActive', 0)->orderBy('alphabet', 'desc')->get();
//        dd($fungicides);
        return view('fungicides.index', compact('fungicides'));
    }

    public function create()
    {
        $firms = Manufacturer::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();
        return view('fungicides.form.create', compact('firms'));
    }

    public function store(AcaricideRequest $request)
    {
        $firm = explode(', ', $request['manufacturersId'][0]);

        $cyrillic= array(0=>'', 1=>'А', 2=>'Б', 3=>'В', 4=>'Г', 5=>'Д', 6=>'Е', 7=>'Ж', 8=>'З', 9=>'И', 10=>'Й',
            11=>'К', 12=>'Л', 13=>'М', 14=>'Н', 15=>'О', 16=>'П', 17=>'Р', 18=>'С',	19=>'Т', 20=>'У',
            21=>'Ф', 22=>'Х', 23=>'Ц', 24=>'Ч', 25=>'Ш', 26=>'Щ', 27=>'Ъ',	28=>'Ь', 29=>'Ю', 30=>'Я');

        $abc= trim(preg_replace("/[0-9]/", "", $request['name']));
        $abc1= trim(preg_replace("/-/", "", $abc));
        $abc2= trim(preg_replace("/.]/", "", $abc1));
        $abc3 = mb_substr($abc2, 0, 1);
        foreach ($cyrillic as $k=>$v){
            if(preg_match("/$abc3/iu", "$v")){
                $in=$k;
            }
        }

        $measure = explode(', ', $request['measure']);

        $data = [
            'name' => $request['name'],
            'type' => $request['type'],
            'moreNames' => $request['moreNames'],
            'secondName' => $request['secondName'],
            'manufacturersId' => $firm[0],
            'firmName' => trim($firm[1]),
            'permission' => $request['permission'],
            'valid' => $request['valid'],
            'dateOrder' => $request['dateOrder'],
            'period' => $request['period'],
            'substance' => $request['substance'],
            'lethal' => $request['lethal'],
            'category' => $request['category'],
            'categoryNote' => $request['categoryNote'],
            'pesticide' => 'fungicides',
            'pesticideId' => 1,
            'pestDescription' => $request['pestDescription'],
            'min' => $request['min'],
            'max' => $request['max'],
            'measureId' => $measure[0],
            'measure' => $measure[1],
            'alphabet' => $in,
            'isActive' => 0,


        ];
//        dd($data);
        Pesticides::create($data);
        return Redirect::to('/fungicides');
    }

    public function show($id)
    {
        $fungicide = Pesticides::where('id', $id)->with('Pestsubstanse')->with('Doses')->get()->toArray();
//        dd($fungicide);
        return view('fungicides.show', compact('fungicide'));
    }

    public function edit($id)
    {
        $fungicide = Pesticides::findOrFail($id);
        $firms = Manufacturer::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();
//        dd($fungicides);
        return view('fungicides.form.edit', compact('fungicide', 'firms'));
    }

    public function update(AcaricideRequest $request, $id)
    {
        $firm = explode(', ', $request['manufacturersId'][0]);

        $cyrillic= array(0=>'', 1=>'А', 2=>'Б', 3=>'В', 4=>'Г', 5=>'Д', 6=>'Е', 7=>'Ж', 8=>'З', 9=>'И', 10=>'Й',
            11=>'К', 12=>'Л', 13=>'М', 14=>'Н', 15=>'О', 16=>'П', 17=>'Р', 18=>'С',	19=>'Т', 20=>'У',
            21=>'Ф', 22=>'Х', 23=>'Ц', 24=>'Ч', 25=>'Ш', 26=>'Щ', 27=>'Ъ',	28=>'Ь', 29=>'Ю', 30=>'Я');

        $abc= trim(preg_replace("/[0-9]/", "", $request['name']));
        $abc1= trim(preg_replace("/-/", "", $abc));
        $abc2= trim(preg_replace("/.]/", "", $abc1));
        $abc3 = mb_substr($abc2, 0, 1);
        foreach ($cyrillic as $k=>$v){
            if(preg_match("/$abc3/iu", "$v")){
                $in=$k;
            }
        }

        $measure = explode(', ', $request['measure']);

        $data = [
            'name' => $request['name'],
            'type' => $request['type'],
            'moreNames' => $request['moreNames'],
            'secondName' => $request['secondName'],
            'manufacturersId' => $firm[0],
            'firmName' => trim($firm[1]),
            'permission' => $request['permission'],
            'valid' => $request['valid'],
            'dateOrder' => $request['dateOrder'],
            'period' => $request['period'],
            'substance' => $request['substance'],
            'lethal' => $request['lethal'],
            'category' => $request['category'],
            'categoryNote' => $request['categoryNote'],
            'pesticide' => 'fungicides',
            'pesticideId' => 1,
            'pestDescription' => $request['pestDescription'],
            'min' => $request['min'],
            'max' => $request['max'],
            'measureId' => $measure[0],
            'measure' => $measure[1],
            'alphabet' => $in

        ];

        $fungicides = Pesticides::findOrFail($id);
        $fungicides->update($data);

        $dataSubs = [
            'name' => $request['name'],
            'firmId' => $firm[0],
            'firm' => trim($firm[1]),
            'alphabet' => $in
        ];

        return Redirect::to('/fungicides/'.$fungicides['id']);
    }

    // ДОЗИ КУЛТУРИ ===========
    public function dose_crop($id, $doseId)
    {
        $crops = Crop::orderBy('name')->get();
        $doses = Dose::where('id', $doseId)->where('pesticides_id', $id)->get()->toArray();
        $fungicide = Pesticides::findOrFail($id);

//        dd($crops);
        return view('fungicides.crops.add_crop_dose', compact('doses', 'crops', 'fungicide'));
    }

    public function dose_crop_store (AddCropDoseRequest $request, $id, $doseId)
    {

        $dose = Dose::where('id', $doseId)->where('pesticides_id', $id)->get()->toArray();
        $fungicide = Pesticides::findOrFail($id);

        $doseData = $dose[0]['dose'].' '.$dose[0]['measure'].' '.$dose[0]['secondDose'];

        $data = [
            'crop_id' => $request['crop_id'],
            'product' => $fungicide->name,
            'productId' => $fungicide->id,
            'dose' => $doseData,
            'doseId' => $dose[0]['id'],
            'note' => $request['note'],
            'afterNote' => $dose[0]['afterNote'],
            'minimumUse' => $dose[0]['note'],
            'disease' => $dose[0]['disease'],
            'application' => $dose[0]['application'],
            'quarantine' => $dose[0]['quarantine'],
            'category' => $fungicide->category,
            'isActive' => $dose[0]['isActive'],
        ];
//        dd($request);

        $crops = Crop::findOrFail($request['crop_id']);
        $fungicide = new Fungicide($data);
//        dd($fungicide);
        $crops->fungicides()->save($fungicide);
        return Redirect::to('/fungicides/dose_crop/'.$id.'/'.$doseId);
    }

    // ДОЗИ КУЛТУРИ ===========

    // СУБСТАНЦИИ ===========
    public function substances($id)
    {
        $fungicide = Pesticides::findOrFail($id);
        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();

        return view('fungicides.form.substances', compact('fungicide', 'substances'));
    }

    public function subs_add(Request $request, $id)
    {
        $fungicides = Pesticides::findOrFail($id);

        $subs = explode(', ', $request['substance_id'][0]);
        $data = [
            'name' => trim($subs[1]),
            'substance_id' => $subs[0],
            'quantity' => $request['quantity'],
            'quantityAfter' => $request['quantityAfter'],
            'pesticide_name' => $fungicides->name,
            'pesticide_type' => $fungicides->pesticide,
            'manufacturersId' => $fungicides->manufacturersId,
            'firmName' => $fungicides->firmName,
            'isActive' => $fungicides->isActive,
//            'pesticideId' => $id,
        ];

        $substance = new PestSubstance($data);
        $fungicides->pestsubstanse()->save($substance);

        return Redirect::to('/fungicides/'.$fungicides['id']);
    }

    public function substances_edit($id, $pest)
    {
        $fungicide = Pesticides::findOrFail($pest);
        $subs = PestSubstance::where('id', $id)->where('pesticides_id', $pest)->get()->toArray();
        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();

        return view('fungicides.form.substances_edit', compact('subs', 'substances', 'fungicide'));
    }

    public function subs_update(Request $request, $id, $pest)
    {
        $subs = explode(', ', $request['substance_id'][0]);
        $data = [
            'name' => trim($subs[1]),
            'substance_id' => $subs[0],
            'quantity' => $request['quantity'],
            'quantityAfter' => $request['quantityAfter'],
        ];

        PestSubstance::where('id', $id)->update($data);

        return Redirect::to('/fungicides/'.$pest);
    }


    // ДОЗИ ===========
    public function dose($id)
    {
        $fungicide = Pesticides::findOrFail($id);
        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();

//        dd($substances);
        return view('fungicides.form.dose', compact('fungicide', 'substances'));
    }

    public function dose_add(Request $request, $id)
    {
        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();
        $measure = explode(', ', $request['measure']);
        $data = [
            "dose" => $request['dose'],
            "measureId" => $measure[0],
            "measure" => trim($measure[1]),
            "secondDose" => $request['secondDose'],
            "note" => $request['note'],
            "crop" => $request['crop'],
            "disease" => $request['disease'],
            "afterNote" => $request['afterNote'],
            "quarantine" => $request['quarantine'],
            "application" => $request['application'],
            "doseNote" => $request['doseNote'],
            "isActive" => $request['isActive'],
        ];

        $fungicide = Pesticides::findOrFail($id);
        $dose = new Dose($data);
//        dd($fungicides);
        $fungicide->doses()->save($dose);

        return view('fungicides.form.dose', compact('fungicide', 'substances'));
    }

    public function dose_edit($id, $pest)
    {
        $dose = Dose::where('id', $id)->where('pesticides_id', $pest)->get()->toArray();
        $fungicide = Pesticides::findOrFail($pest);
        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();

//        dd($dose);
        return view('fungicides.form.dose_edit', compact('dose', 'substances', 'fungicide'));
    }

    public function dose_update(Request $request, $id, $pest)
    {
        $measure = explode(', ', $request['measure']);
        $data = [
            "dose" => $request['dose'],
            "measureId" => $measure[0],
            "measure" => $measure[1],
            "secondDose" => $request['secondDose'],
            "note" => $request['note'],
            "crop" => $request['crop'],
            "disease" => $request['disease'],
            "afterNote" => $request['afterNote'],
            "quarantine" => $request['quarantine'],
            "application" => $request['application'],
            "doseNote" => $request['doseNote'],
//            "isActive" => $request['isActive'],
        ];

//        dd($data);
        Dose::where('id', $id)->update($data);

        return Redirect::to('/fungicides/'.$pest);
    }

    public function destroy($id){}


    // ДЕАКТИВИРАНЕ НА ДОЗА И ПРЗ
    public function deactivate_one($dose, $pest) {
        $doses = Dose::where('id', $dose)->where('pesticides_id', $pest)->get()->toArray();
        $fungicide = Pesticides::findOrFail($pest);

//        dd($fungicides);
        return view('fungicides.active.deactive_on', compact('doses', 'fungicide'));
    }

    public function deactivate_one_store(Request $request, $dose, $pest) {
        $data = [
            "isActive" => $request['isActive'],
        ];
//        dd($request);
        Dose::where('id', $dose)->update($data);
        Fungicide::where('productId', $pest)->where('doseId', $dose)->update($data);

        return Redirect::to('/fungicides/'.$pest);
    }

    public function deactivate($pest) {
        $fungicide = Pesticides::findOrFail($pest);

        return view('fungicides.active.deactivate', compact('fungicide'));
    }

    public function deactivate_store(Request $request, $id) {
        $data = [
            "isActive" => $request['isActive'],
        ];

        Pesticides::where('id', $id)->update($data);
        Dose::where('pesticides_id', $id)->update($data);
        Fungicide::where('productId', $id)->update($data);
        PestSubstance::where('pesticides_id', $id)->update($data);

        return Redirect::to('/fungicides/'.$id);
    }
}
