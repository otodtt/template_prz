<?php

namespace App\Http\Controllers;

use App\Adjuvant;
use App\Http\Requests\AdjuvantRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdjuvantsController extends Controller
{
    public function index()
    {
        $adjuvants = Adjuvant::where('isActive', 0)->orderBy('id', 'asc')->get();
        return view('adjuvants.index', compact('adjuvants'));
    }

    public function deactivated()
    {
        $adjuvants = Adjuvant::where('isActive', 1)->orderBy('id', 'asc')->get();
        return view('adjuvants.deactivated', compact('adjuvants'));
    }

    public function create()
    {
        return view('adjuvants.form.create');
    }

    public function store(AdjuvantRequest $request)
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

        $data = [
            'name' => $request['name'],
            'orderAdjuvant' => $request['orderAdjuvant'],
            'owner' => $request['owner'],
            'type' => $request['type'],
            'action' => $request['action'],
            'crops' => $request['crops'],
            'dose' => $request['dose'],
            'application' => $request['application'],
            'noteApplication' => $request['noteApplication'],
            'alphabet' => $in,
            'isActive' => $request['isActive']
        ];

//        dd($data);
        Adjuvant::create($data);
        return Redirect::to('/adjuvants');
    }

    public function edit($id)
    {
        $adjuvant = adjuvant::findOrFail($id);
        return view('adjuvants.form.edit', compact('adjuvant'));
    }

    public function update(AdjuvantRequest $request, $id)
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

        $data = [
            'name' => $request['name'],
            'orderAdjuvant' => $request['orderAdjuvant'],
            'owner' => $request['owner'],
            'type' => $request['type'],
            'action' => $request['action'],
            'crops' => $request['crops'],
            'dose' => $request['dose'],
            'application' => $request['application'],
            'noteApplication' => $request['noteApplication'],
            'alphabet' => $in,
            'isActive' => $request['isActive']
        ];
//        dd($data);
        $adjuvants = Adjuvant::findOrFail($id);
        $adjuvants->update($data);

        return Redirect::to('/adjuvants');
    }

    public function get_adjuvant(Request $request)
    {
//        $practices = Pesticides::where('pesticideId', 1)->orderBy('name', 'asc')
        $practices = Adjuvant::where('isActive', 0)->orderBy('id', 'asc')->get()->toArray();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
//        dd($practices);
        return view('templates.database_products', compact('practices'));
    }
}
