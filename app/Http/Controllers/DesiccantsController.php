<?php

namespace App\Http\Controllers;

use App\Crop;
use App\Desiccant;
use App\Dose;
use App\Http\Requests\AcaricideRequest;
use App\Http\Requests\AddCropDoseRequest;
use App\Manufacturer;
use App\Pesticides;
use App\Substance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DesiccantsController extends Controller
{
    public function index()
    {
        $desiccants = Pesticides::where('pesticideId', 10)->where('isActive', 0)->orderBy('alphabet', 'asc')->get();
        return view('desiccants.index', compact('desiccants'));
    }

    public function create()
    {
        $firms = Manufacturer::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();
        return view('desiccants.form.create', compact('firms'));
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
            'pesticide' => 'desiccants',
            'pesticideId' => 10,
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
        return Redirect::to('/desiccants');
    }

    public function show($id)
    {
        $desiccant = Pesticides::where('id', $id)->with('Pestsubstanse')->with('Doses')->get()->toArray();
        return view('desiccants.show', compact('desiccant'));
    }

    public function edit($id)
    {
        $desiccants = Pesticides::findOrFail($id);
        $firms = Manufacturer::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();

        return view('desiccants.form.edit', compact('desiccants', 'firms'));
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
            'pesticide' => 'desiccants',
            'pesticideId' => 10,
            'pestDescription' => $request['pestDescription'],
            'min' => $request['min'],
            'max' => $request['max'],
            'measureId' => $measure[0],
            'measure' => $measure[1],
            'alphabet' => $in

        ];

        $desiccants = Pesticides::findOrFail($id);
        $desiccants->update($data);

        $dataSubs = [
            'name' => $request['name'],
            'firmId' => $firm[0],
            'firm' => trim($firm[1]),
            'alphabet' => $in
        ];

        return Redirect::to('/desiccants/'.$desiccants['id']);
    }

    // СУБСТАНЦИИ ===========
//    public function substances($id)
//    {
//        $desiccants = Pesticides::findOrFail($id);
//        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();
//
//        return view('desiccants.form.substances', compact('desiccants', 'substances'));
//    }
//
//    public function subs_add(Request $request, $id)
//    {
//        $desiccant = Pesticides::findOrFail($id);
//
//        $subs = explode(', ', $request['substance_id'][0]);
//        $data = [
//            'name' => trim($subs[1]),
//            'substance_id' => $subs[0],
//            'quantity' => $request['quantity'],
//            'quantityAfter' => $request['quantityAfter'],
//            'pesticide_name' => $desiccant->name,
//            'pesticide_type' => $desiccant->pesticide,
//            'manufacturersId' => $desiccant->manufacturersId,
//            'firmName' => $desiccant->firmName,
//            'isActive' => $desiccant->isActive,
////            'pesticideId' => $id,
//        ];
//
//        $substance = new PestSubstance($data);
//        $desiccant->pestsubstanse()->save($substance);
//
//        return Redirect::to('/desiccants/'.$desiccant['id']);
//    }
//
//    public function substances_edit($id, $pest)
//    {
//        $desiccant = Pesticides::findOrFail($pest);
//        $subs = PestSubstance::where('id', $id)->where('pesticides_id', $pest)->get()->toArray();
//        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();
//
//        return view('desiccants.form.substances_edit', compact('subs', 'substances', 'desiccant'));
//    }
//
//    public function subs_update(Request $request, $id, $pest)
//    {
//        $subs = explode(', ', $request['substance_id'][0]);
//        $data = [
//            'name' => trim($subs[1]),
//            'substance_id' => $subs[0],
//            'quantity' => $request['quantity'],
//            'quantityAfter' => $request['quantityAfter'],
//        ];
//
//        PestSubstance::where('id', $id)->update($data);
//
//        return Redirect::to('/desiccants/'.$pest);
//    }

    // ДОЗИ ===========
    public function dose($id)
    {
        $desiccant = Pesticides::findOrFail($id);
        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();

        return view('desiccants.form.dose', compact('desiccant', 'substances'));
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

        $desiccant = Pesticides::findOrFail($id);
        $dose = new Dose($data);
        $desiccant->doses()->save($dose);

        return view('desiccants.form.dose', compact('desiccant', 'substances'));
    }

    public function dose_edit($id, $pest)
    {
        $dose = Dose::where('id', $id)->where('pesticides_id', $pest)->get()->toArray();
        $desiccant = Pesticides::findOrFail($pest);
        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();

        return view('desiccants.form.dose_edit', compact('dose', 'substances', 'desiccant'));
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
        ];

        Dose::where('id', $id)->update($data);

        return Redirect::to('/desiccants/'.$pest);
    }

    public function destroy($id){}

    // ДОЗИ КУЛТУРИ ===========
    public function dose_crop($id, $doseId)
    {
        $crops = Crop::orderBy('name')->get();
        $doses = Dose::where('id', $doseId)->where('pesticides_id', $id)->get()->toArray();
        $desiccant = Pesticides::findOrFail($id);

        return view('desiccants.crops.add_crop_dose', compact('doses', 'crops', 'desiccant'));
    }

    public function dose_crop_store (AddCropDoseRequest $request, $id, $doseId)
    {
        $dose = Dose::where('id', $doseId)->where('pesticides_id', $id)->get()->toArray();
        $desiccant = Pesticides::findOrFail($id);

        $doseData = $dose[0]['dose'].' '.$dose[0]['measure'].' '.$dose[0]['secondDose'];

        $data = [
            'crop_id' => $request['crop_id'],
            'product' => $desiccant->name,
            'productId' => $desiccant->id,
            'dose' => $doseData,
            'doseId' => $dose[0]['id'],
            'note' => $request['note'],
            'afterNote' => $dose[0]['afterNote'],
            'minimumUse' => $dose[0]['note'],
            'disease' => $dose[0]['disease'],
            'application' => $dose[0]['application'],
            'quarantine' => $dose[0]['quarantine'],
            'category' => $desiccant->category,
            'isActive' => $dose[0]['isActive'],
        ];

        $crops = Crop::findOrFail($request['crop_id']);
        $desiccant = new Desiccant($data);
//        dd($acaricide);
        $crops->desiccants()->save($desiccant);
        return Redirect::to('/desiccants/dose_crop/'.$id.'/'.$doseId);
    }
    // ДОЗИ КУЛТУРИ ===========

    // ДЕАКТИВИРАНЕ НА ДОЗА И ПРЗ
    public function deactivate_one($dose, $pest) {
        $doses = Dose::where('id', $dose)->where('pesticides_id', $pest)->get()->toArray();
        $desiccant = Pesticides::findOrFail($pest);

        return view('desiccants.active.deactive_on', compact('doses', 'desiccant'));
    }

    public function deactivate_one_store(Request $request, $dose, $pest) {
        $data = [
            "isActive" => $request['isActive'],
        ];
//        dd($request);
        Dose::where('id', $dose)->update($data);
        desiccants::where('productId', $pest)->where('doseId', $dose)->update($data);

        return Redirect::to('/desiccants/'.$pest);
    }

    public function deactivate($pest) {
        $desiccant = Pesticides::findOrFail($pest);

        return view('desiccants.active.deactivate', compact('desiccant'));
    }

    public function deactivate_store(Request $request, $id) {
        $data = [
            "isActive" => $request['isActive'],
        ];

        Pesticides::where('id', $id)->update($data);
        Dose::where('pesticides_id', $id)->update($data);
        desiccants::where('productId', $id)->update($data);
        PestSubstance::where('pesticides_id', $id)->update($data);

        return Redirect::to('/desiccants/'.$id);
    }
}
