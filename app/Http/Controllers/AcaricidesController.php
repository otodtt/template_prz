<?php

namespace App\Http\Controllers;

use App\Dose;
use App\Pesticides;
use App\Http\Requests\AcaricideRequest;
use App\Manufacturer;
use App\PestSubstance;
use App\Subs;
use App\Substance;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

class AcaricidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acaricides = Pesticides::where('pesticideId', 1)->get();
//        dd($acaricides);
        return view('acaricides.index', compact('acaricides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $firms = Manufacturer::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();
        return view('acaricides.form.create', compact('firms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcaricideRequest $request)
    {
        $firm = explode(', ', $request['manufacturersId'][0]);

        $cyrillic= array(0=>'', 1=>'А', 2=>'Б', 3=>'В', 4=>'Г', 5=>'Д', 6=>'Е', 7=>'Ж', 8=>'З', 9=>'И', 10=>'Й',
            11=>'К', 12=>'Л', 13=>'М', 14=>'Н', 15=>'О', 16=>'П', 17=>'Р', 18=>'С',	19=>'Т', 20=>'У',
            21=>'Ф', 22=>'Х', 23=>'Ц', 24=>'Ч', 25=>'Ш', 26=>'Щ', 27=>'Ъ',	28=>'Ь', 29=>'Ю', 30=>'Я');

        $abc= trim(preg_replace("/[0-9]/", "", $firm[1]));
        $abc1= trim(preg_replace("/-/", "", $abc));
        $abc2= trim(preg_replace("/.]/", "", $abc1));
        $abc3 = mb_substr($abc2, 0, 1);
        foreach ($cyrillic as $k=>$v){
            if(preg_match("/$abc3/iu", "$v")){
                $in=$k;
            }
        }

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
            'pesticide' => 'акарицид',
            'pesticideId' => 1,
            'pestDescription' => $request['pestDescription'],
            'alphabet' => $in,


        ];
        Pesticides::create($data);
//        dd($data);
        return Redirect::to('/acaricides');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $acaricides = Pesticides::findOrFail($id);
        $acaricide = Pesticides::where('id', $id)->with('Pestsubstanse')->with('Doses')->get()->toArray();
//        dd($acaricide);
        return view('acaricides.show', compact('acaricide'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acaricides = Pesticides::findOrFail($id);
        $firms = Manufacturer::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();
//        dd($acaricides);
        return view('acaricides.form.edit', compact('acaricides', 'firms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AcaricideRequest $request, $id)
    {
        $firm = explode(', ', $request['manufacturersId'][0]);

        $cyrillic= array(0=>'', 1=>'А', 2=>'Б', 3=>'В', 4=>'Г', 5=>'Д', 6=>'Е', 7=>'Ж', 8=>'З', 9=>'И', 10=>'Й',
            11=>'К', 12=>'Л', 13=>'М', 14=>'Н', 15=>'О', 16=>'П', 17=>'Р', 18=>'С',	19=>'Т', 20=>'У',
            21=>'Ф', 22=>'Х', 23=>'Ц', 24=>'Ч', 25=>'Ш', 26=>'Щ', 27=>'Ъ',	28=>'Ь', 29=>'Ю', 30=>'Я');

        $abc= trim(preg_replace("/[0-9]/", "", $firm[1]));
        $abc1= trim(preg_replace("/-/", "", $abc));
        $abc2= trim(preg_replace("/.]/", "", $abc1));
        $abc3 = mb_substr($abc2, 0, 1);
        foreach ($cyrillic as $k=>$v){
            if(preg_match("/$abc3/iu", "$v")){
                $in=$k;
            }
        }

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
            'pesticide' => 'акарицид',
            'pesticideId' => 1,
            'pestDescription' => $request['pestDescription'],
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


    // СУБСТАНЦИИ ===========
    public function substances($id)
    {
        $acaricides = Pesticides::findOrFail($id);
        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();

//        dd($substances);
        return view('acaricides.form.substances', compact('acaricides', 'substances'));
    }

    public function subs_add(Request $request, $id)
    {
        $subs = explode(', ', $request['substanceId'][0]);
        $data = [
            'name' => trim($subs[1]),
            'substanceId' => $subs[0],
            'quantity' => $request['quantity'],
            'quantityAfter' => $request['quantityAfter'],
//            'pesticideId' => $id,
        ];


        $acaricides = Pesticides::findOrFail($id);
        $substance = new PestSubstance($data);
//        dd($acaricides);
        $acaricides->pestsubstanse()->save($substance);


//        Session::flash('message', 'Сертификата е добавен успешно!');
        return Redirect::to('/acaricides/'.$acaricides['id']);
    }

    public function substances_edit($id, $pest)
    {
        $acaricides = Pesticides::findOrFail($pest);
        $subs = PestSubstance::where('id', $id)->where('pesticides_id', $pest)->get()->toArray();
        $substances = Substance::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();

//        dd($substances);
        return view('acaricides.form.substances_edit', compact('subs', 'substances', 'acaricides'));
    }

    public function subs_update(Request $request, $id, $pest)
    {
        $subs = explode(', ', $request['substanceId'][0]);
        $data = [
            'name' => trim($subs[1]),
            'substanceId' => $subs[0],
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
            "measure" => $measure[1],
            "secondDose" => $request['secondDose'],
            "note" => $request['note'],
            "crop" => $request['crop'],
            "disease" => $request['disease'],
            "afterNote" => $request['afterNote'],
            "quarantine" => $request['quarantine'],
            "isCalc" => $request['isCalc'],
            "application" => $request['application'],
            "doseNote" => $request['doseNote'],
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
            "isCalc" => $request['isCalc'],
            "application" => $request['application'],
            "doseNote" => $request['doseNote'],
        ];

        Dose::where('id', $id)->update($data);

        return Redirect::to('/acaricides/'.$pest);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
