<?php

namespace App\Http\Controllers;

use App\Acaricide;
use App\Crop;
use App\Dose;
use App\Http\Requests\AddCropDoseRequest;
use App\Pesticides;
use App\Http\Requests\AcaricideRequest;
use App\Manufacturer;
use App\PestSubstance;
use App\Subs;
use App\Substance;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AcaricidesController extends Controller
{
    public function index()
    {
//        $acaricides = Pesticides::where('pesticideId', 3)->get();
//        $acaricides = Pesticides::where('pesticideId', 3)->orderBy('id', 'desc')->get();
        $acaricides = Pesticides::where('pesticideId', 3)->where('isActive', 0)->orderBy('alphabet', 'asc')->get();
//        dd($acaricides);
        return view('acaricides.index', compact('acaricides'));
    }

    public function create()
    {
        $firms = Manufacturer::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();
        return view('acaricides.form.create', compact('firms'));
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
            'pesticide' => 'acaricides',
            'pesticideId' => 3,
            'pestDescription' => $request['pestDescription'],
            'min' => $request['min'],
            'max' => $request['max'],
            'measureId' => $measure[0],
            'measure' => $measure[1],
            'alphabet' => $in,
            'isActive' => 0,


        ];
        Pesticides::create($data);
//        dd($data);
        return Redirect::to('/acaricides');
    }

    public function show($id)
    {
        $acaricide = Pesticides::where('id', $id)->with('Pestsubstanse')->with('Doses')->get()->toArray();
//        dd($acaricide);
        return view('acaricides.show', compact('acaricide'));
    }

    public function edit($id)
    {
        $acaricides = Pesticides::findOrFail($id);
        $firms = Manufacturer::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();
//        dd($acaricides);
        return view('acaricides.form.edit', compact('acaricides', 'firms'));
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
            'pesticide' => 'acaricides',
            'pesticideId' => 3,
            'pestDescription' => $request['pestDescription'],
            'min' => $request['min'],
            'max' => $request['max'],
            'measureId' => $measure[0],
            'measure' => $measure[1],
            'alphabet' => $in

        ];

        $acaricides = Pesticides::findOrFail($id);
        $acaricides->update($data);

        $dataSubs = [
            'name' => $request['name'],
            'firmId' => $firm[0],
            'firm' => trim($firm[1]),
            'alphabet' => $in
        ];

        return Redirect::to('/acaricides/'.$acaricides['id']);
    }

    // ДОЗИ КУЛТУРИ ===========
    public function dose_crop($id, $doseId)
    {
        $crops = Crop::orderBy('name')->get();
        $doses = Dose::where('id', $doseId)->where('pesticides_id', $id)->get()->toArray();
        $acaricides = Pesticides::findOrFail($id);

//        dd($crops);
        return view('acaricides.crops.add_crop_dose', compact('doses', 'crops', 'acaricides'));
    }

    public function dose_crop_store (AddCropDoseRequest $request, $id, $doseId)
    {

        $dose = Dose::where('id', $doseId)->where('pesticides_id', $id)->get()->toArray();
        $acaricide = Pesticides::findOrFail($id);

        $doseData = $dose[0]['dose'].' '.$dose[0]['measure'].' '.$dose[0]['secondDose'];

        $data = [
            'crop_id' => $request['crop_id'],
            'product' => $acaricide->name,
            'productId' => $acaricide->id,
            'dose' => $doseData,
            'doseId' => $dose[0]['id'],
            'note' => $request['note'],
            'afterNote' => $dose[0]['afterNote'],
            'minimumUse' => $dose[0]['note'],
            'disease' => $dose[0]['disease'],
            'application' => $dose[0]['application'],
            'quarantine' => $dose[0]['quarantine'],
            'category' => $acaricide->category,
            'isActive' => $dose[0]['isActive'],
        ];
//        dd($request);

        $crops = Crop::findOrFail($request['crop_id']);
        $acaricide = new Acaricide($data);
//        dd($acaricide);
        $crops->acaricides()->save($acaricide);
        return Redirect::to('/acaricides/dose_crop/'.$id.'/'.$doseId);
    }

    // ДОЗИ КУЛТУРИ ===========

    // СУБСТАНЦИИ ===========
    public function substances($id)
    {
        $acaricides = Pesticides::findOrFail($id);
        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();

        return view('acaricides.form.substances', compact('acaricides', 'substances'));
    }

    public function subs_add(Request $request, $id)
    {
        $acaricides = Pesticides::findOrFail($id);

        $subs = explode(', ', $request['substance_id'][0]);
        $data = [
            'name' => trim($subs[1]),
            'substance_id' => $subs[0],
            'quantity' => $request['quantity'],
            'quantityAfter' => $request['quantityAfter'],
            'pesticide_name' => $acaricides->name,
            'pesticide_type' => $acaricides->pesticide,
            'manufacturersId' => $acaricides->manufacturersId,
            'firmName' => $acaricides->firmName,
            'isActive' => $acaricides->isActive,
//            'pesticideId' => $id,
        ];

        $substance = new PestSubstance($data);
        $acaricides->pestsubstanse()->save($substance);

        return Redirect::to('/acaricides/'.$acaricides['id']);
    }

    public function substances_edit($id, $pest)
    {
        $acaricides = Pesticides::findOrFail($pest);
        $subs = PestSubstance::where('id', $id)->where('pesticides_id', $pest)->get()->toArray();
        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();

        return view('acaricides.form.substances_edit', compact('subs', 'substances', 'acaricides'));
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

        return Redirect::to('/acaricides/'.$pest);
    }


    // ДОЗИ ===========
    public function dose($id)
    {
        $acaricides = Pesticides::findOrFail($id);
        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();

//        dd($substances);
        return view('acaricides.form.dose', compact('acaricides', 'substances'));
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

        $acaricides = Pesticides::findOrFail($id);
        $dose = new Dose($data);
//        dd($acaricides);
        $acaricides->doses()->save($dose);

        return view('acaricides.form.dose', compact('acaricides', 'substances'));
    }

    public function dose_edit($id, $pest)
    {
        $dose = Dose::where('id', $id)->where('pesticides_id', $pest)->get()->toArray();
        $acaricides = Pesticides::findOrFail($pest);
        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();

//        dd($dose);
        return view('acaricides.form.dose_edit', compact('dose', 'substances', 'acaricides'));
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

        Dose::where('id', $id)->update($data);

        return Redirect::to('/acaricides/'.$pest);
    }

    public function destroy($id){}


    // ДЕАКТИВИРАНЕ НА ДОЗА И ПРЗ
    public function deactivate_one($dose, $pest) {
        $doses = Dose::where('id', $dose)->where('pesticides_id', $pest)->get()->toArray();
        $acaricides = Pesticides::findOrFail($pest);

//        dd($acaricides);
        return view('acaricides.active.deactive_on', compact('doses', 'acaricides'));
    }

    public function deactivate_one_store(Request $request, $dose, $pest) {
        $data = [
            "isActive" => $request['isActive'],
        ];
//        dd($request);
        Dose::where('id', $dose)->update($data);
        Acaricide::where('productId', $pest)->where('doseId', $dose)->update($data);

        return Redirect::to('/acaricides/'.$pest);
    }

    public function deactivate($pest) {
        $acaricides = Pesticides::findOrFail($pest);

        return view('acaricides.active.deactivate', compact('acaricides'));
    }

    public function deactivate_store(Request $request, $id) {
        $data = [
            "isActive" => $request['isActive'],
        ];

        Pesticides::where('id', $id)->update($data);
        Dose::where('pesticides_id', $id)->update($data);
        Acaricide::where('productId', $id)->update($data);
        PestSubstance::where('pesticides_id', $id)->update($data);

        return Redirect::to('/acaricides/'.$id);
    }
}
