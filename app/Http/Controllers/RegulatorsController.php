<?php

namespace App\Http\Controllers;

use App\Crop;
use App\Dose;
use App\Http\Requests\AcaricideRequest;
use App\Http\Requests\AddCropDoseRequest;
use App\Manufacturer;
use App\Pesticides;
use App\PestSubstance;
use App\Regulator;
use App\Substance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegulatorsController extends Controller
{
    public function index()
    {
        $regulators = Pesticides::where('pesticideId', 11)->where('isActive', 0)->orderBy('alphabet', 'asc')->get();
        return view('regulators.index', compact('regulators'));
    }

    public function create()
    {
        $firms = Manufacturer::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();
        return view('regulators.form.create', compact('firms'));
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
            'pesticide' => 'regulators',
            'pesticideId' => 11,
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
        return Redirect::to('/regulators');
    }

    public function show($id)
    {
        $regulator = Pesticides::where('id', $id)->with('Pestsubstanse')->with('Doses')->get()->toArray();
        return view('regulators.show', compact('regulator'));
    }

    public function edit($id)
    {
        $regulator = Pesticides::findOrFail($id);
        $firms = Manufacturer::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();

        return view('regulators.form.edit', compact('regulator', 'firms'));
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
            'pesticide' => 'regulators',
            'pesticideId' => 11,
            'pestDescription' => $request['pestDescription'],
            'min' => $request['min'],
            'max' => $request['max'],
            'measureId' => $measure[0],
            'measure' => $measure[1],
            'alphabet' => $in

        ];

        $regulators = Pesticides::findOrFail($id);
        $regulators->update($data);

        $dataSubs = [
            'name' => $request['name'],
            'firmId' => $firm[0],
            'firm' => trim($firm[1]),
            'alphabet' => $in
        ];

        return Redirect::to('/regulators/'.$regulators['id']);
    }

    // СУБСТАНЦИИ ===========
//    public function substances($id)
//    {
//        $regulators = Pesticides::findOrFail($id);
//        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();
//
//        return view('regulators.form.substances', compact('regulators', 'substances'));
//    }
//
//    public function subs_add(Request $request, $id)
//    {
//        $regulator = Pesticides::findOrFail($id);
//
//        $subs = explode(', ', $request['substance_id'][0]);
//        $data = [
//            'name' => trim($subs[1]),
//            'substance_id' => $subs[0],
//            'quantity' => $request['quantity'],
//            'quantityAfter' => $request['quantityAfter'],
//            'pesticide_name' => $regulator->name,
//            'pesticide_type' => $regulator->pesticide,
//            'manufacturersId' => $regulator->manufacturersId,
//            'firmName' => $regulator->firmName,
//            'isActive' => $regulator->isActive,
////            'pesticideId' => $id,
//        ];
//
//        $substance = new PestSubstance($data);
//        $regulator->pestsubstanse()->save($substance);
//
//        return Redirect::to('/regulators/'.$regulator['id']);
//    }
//
//    public function substances_edit($id, $pest)
//    {
//        $regulator = Pesticides::findOrFail($pest);
//        $subs = PestSubstance::where('id', $id)->where('pesticides_id', $pest)->get()->toArray();
//        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();
//
//        return view('regulators.form.substances_edit', compact('subs', 'substances', 'regulator'));
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
//        return Redirect::to('/regulators/'.$pest);
//    }

    // ДОЗИ ===========
    public function dose($id)
    {
        $regulator = Pesticides::findOrFail($id);
        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();

        return view('regulators.form.dose', compact('regulator', 'substances'));
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

        $regulator = Pesticides::findOrFail($id);
        $dose = new Dose($data);
        $regulator->doses()->save($dose);

        return view('regulators.form.dose', compact('regulator', 'substances'));
    }

    public function dose_edit($id, $pest)
    {
        $dose = Dose::where('id', $id)->where('pesticides_id', $pest)->get()->toArray();
        $regulator = Pesticides::findOrFail($pest);
        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();

        return view('regulators.form.dose_edit', compact('dose', 'substances', 'regulator'));
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

        return Redirect::to('/regulators/'.$pest);
    }

    public function destroy($id){}

    // ДОЗИ КУЛТУРИ ===========
    public function dose_crop($id, $doseId)
    {
        $crops = Crop::orderBy('name')->get();
        $doses = Dose::where('id', $doseId)->where('pesticides_id', $id)->get()->toArray();
        $regulator = Pesticides::findOrFail($id);

        return view('regulators.crops.add_crop_dose', compact('doses', 'crops', 'regulator'));
    }

    public function dose_crop_store (AddCropDoseRequest $request, $id, $doseId)
    {
        $dose = Dose::where('id', $doseId)->where('pesticides_id', $id)->get()->toArray();
        $regulator = Pesticides::findOrFail($id);

        if ($dose[0]['measureId'] == 6) {
            $doseData = $dose[0]['dose'].' '.$dose[0]['secondDose'];
        } else {
            $doseData = $dose[0]['dose'].' '.$dose[0]['measure'].' '.$dose[0]['secondDose'];
        }



        $data = [
            'crop_id' => $request['crop_id'],
            'product' => $regulator->name,
            'productId' => $regulator->id,
            'dose' => $doseData,
            'doseId' => $dose[0]['id'],
            'note' => $request['note'],
            'afterNote' => $dose[0]['afterNote'],
            'minimumUse' => $dose[0]['note'],
            'disease' => $dose[0]['disease'],
            'application' => $dose[0]['application'],
            'quarantine' => $dose[0]['quarantine'],
            'category' => $regulator->category,
            'isActive' => $dose[0]['isActive'],
        ];

        $crops = Crop::findOrFail($request['crop_id']);
        $regulator = new regulator($data);
//        dd($acaricide);
        $crops->regulators()->save($regulator);
        return Redirect::to('/regulators/dose_crop/'.$id.'/'.$doseId);
    }
    // ДОЗИ КУЛТУРИ ===========

    // ДЕАКТИВИРАНЕ НА ДОЗА И ПРЗ
    public function deactivate_one($dose, $pest) {
        $doses = Dose::where('id', $dose)->where('pesticides_id', $pest)->get()->toArray();
        $regulator = Pesticides::findOrFail($pest);

        return view('regulators.active.deactive_on', compact('doses', 'regulator'));
    }

    public function deactivate_one_store(Request $request, $dose, $pest) {
        $data = [
            "isActive" => $request['isActive'],
        ];
//        dd($request);
        Dose::where('id', $dose)->update($data);
        Regulator::where('productId', $pest)->where('doseId', $dose)->update($data);

        return Redirect::to('/regulators/'.$pest);
    }

    public function deactivate($pest) {
        $regulator = Pesticides::findOrFail($pest);

        return view('regulators.active.deactivate', compact('regulator'));
    }

    public function deactivate_store(Request $request, $id) {
        $data = [
            "isActive" => $request['isActive'],
        ];

        Pesticides::where('id', $id)->update($data);
        Dose::where('pesticides_id', $id)->update($data);
        Regulator::where('productId', $id)->update($data);
        PestSubstance::where('pesticides_id', $id)->update($data);

        return Redirect::to('/regulators/'.$id);
    }
}
