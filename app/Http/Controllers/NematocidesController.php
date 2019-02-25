<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcaricideRequest;
use App\Manufacturer;
use App\Nematocides;
use App\Pesticides;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NematocidesController extends Controller
{
    public function index()
    {
        $nematocides = Pesticides::where('pesticideId', 4)->where('isActive', 0)->orderBy('alphabet', 'asc')->get();
        return view('nematocides.index', compact('nematocides'));
    }

    public function create()
    {
        $firms = Manufacturer::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();
        return view('nematocides.form.create', compact('firms'));
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
            'pesticide' => 'nematocides',
            'pesticideId' => 4,
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
        return Redirect::to('/nematocides');
    }

    public function show($id)
    {
        $nematocide = Pesticides::where('id', $id)->with('Pestsubstanse')->with('Doses')->get()->toArray();
//        dd($acaricide);
        return view('nematocides.show', compact('nematocide'));
    }
}
