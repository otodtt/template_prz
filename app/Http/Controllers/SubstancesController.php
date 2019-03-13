<?php

namespace App\Http\Controllers;

use App\Subs;
use App\Substance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SubstancesController extends Controller
{

    public function index()
    {
        $substances = Substance::orderBy('alphabet', 'asc')->with('products')->get()->toArray();
//        $substances->Products->count();
//        dd($substances);

        return view('substances.index', compact('substances'));
    }

    public function create()
    {
        return view('substances.create');
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
//        dd($cyrillic);
        foreach ($cyrillic as $k=>$v){
            if(preg_match("/$abc3/iu", "$v")){
                $in=$k;
            }
        }
        Substance::create([
            'name'=> $request['name'],
            'moreUses'=> $request['moreUses'],
            'alphabet'=> $in,
        ]);

        return Redirect::to('substances');
    }

    public function show($id)
    {
        $substances = Substance::where('id', $id)->with('products')->get()->toArray();
//        dd($substances);
        return view('substances.show', compact('substances'));
    }

    public function add($id)
    {
        $substances = Substance::findOrFail($id);
        return view('substances.add', compact('substances'));
    }

    public function store_add(Request $request, $id)
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

        Subs::create([
            'name'=> $request['name'],
            'substance_id'=> $id,
            'idPest'=> $request['idPest'],
            'firm'=> $request['firm'],
            'firmId'=> $request['firmId'],
            'typePest'=> 1,
            'alphabet'=> $in,
        ]);

        return Redirect::to('substances/'.$id);
    }

    public function edit($id){}

    public function update(Request $request, $id){}

    public function destroy($id){}

    public function get_substances() {
//        $practices = Substance::orderBy('alphabet', 'asc')->with('products')->get()->toArray();
        $practices = Substance::orderBy('alphabet', 'asc')
                                ->with('products')
                                ->with('acaricides')
                                ->with('nematocides')
                                ->with('limatsides')
                                ->get()->toArray();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
//        dd($practices);
        return view('templates.database_products', compact('practices'));
    }
}
