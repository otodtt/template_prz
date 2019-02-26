<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use App\Pesticides;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ManufacturersController extends Controller
{
    public function index()
    {
        $firms = Manufacturer::orderBy('alphabet', 'asc')->with('Pesticides')->get()->toArray();
//        dd($firms);
        return view('manufacturers.index', compact('firms'));
    }

    public function create()
    {
        return view('manufacturers.create');
    }

    public function store(Request $request)
    {
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

        Manufacturer::create([
            'name'=> $request['name'],
            'country'=> $request['country'],
            'alphabet'=> $in,
        ]);

        return Redirect::to('manufacturers');
    }

    public function show($id)
    {
        $firms_all = Manufacturer::select('id', 'name', 'country')
            ->where('id', $id)
            ->with('pesticides')
            ->get()->toArray();
        $json = json_encode($firms_all, JSON_UNESCAPED_UNICODE);


        $firms = Manufacturer::findOrFail($id);
        $acaricides = Pesticides::where('manufacturersId', $id)
                                ->where('pesticideId', 3)
                                ->where('isActive', 0)
                                ->get()->toArray();

        $nematocides = Pesticides::where('manufacturersId', $id)
            ->where('pesticideId', 4)
            ->where('isActive', 0)
            ->get()->toArray();

        return view('manufacturers.show', compact('firms', 'acaricides', 'nematocides'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
