<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParallelRequest;
use App\Parallel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ParallelController extends Controller
{
    public function index()
    {
        $parallels = Parallel::where('isActive', 0)->orderBy('id', 'asc')->get();
        return view('parallel.index', compact('parallels'));
    }

    public function create()
    {
        return view('parallel.form.create');
    }

    public function store(ParallelRequest $request)
    {
        $result = $request['typeId'];
        $result_explode = explode(' | ', $result);

        $cyrillic= array(0=>'', 1=>'А', 2=>'Б', 3=>'В', 4=>'Г', 5=>'Д', 6=>'Е', 7=>'Ж', 8=>'З', 9=>'И', 10=>'Й',
            11=>'К', 12=>'Л', 13=>'М', 14=>'Н', 15=>'О', 16=>'П', 17=>'Р', 18=>'С',	19=>'Т', 20=>'У',
            21=>'Ф', 22=>'Х', 23=>'Ц', 24=>'Ч', 25=>'Ш', 26=>'Щ', 27=>'Ъ',	28=>'Ь', 29=>'Ю', 30=>'Я');

        $abc= trim(preg_replace("/[0-9]/", "", $request['product']));
        $abc1= trim(preg_replace("/-/", "", $abc));
        $abc2= trim(preg_replace("/.]/", "", $abc1));
        $abc3 = mb_substr($abc2, 0, 1);
        foreach ($cyrillic as $k=>$v){
            if(preg_match("/$abc3/iu", "$v")){
                $in=$k;
            }
        }

        $data = [
            'owner' => $request['owner'],
            'product' => $request['product'],
            'substances' => $request['substances'],
            'referenceProduct' => $request['referenceProduct'],
            'manufacturer' => $request['manufacturer'],
            'validReferenceProduct' => $request['validReferenceProduct'],
            'parallelTrade' => $request['parallelTrade'],
            'validParallelTrade' => $request['validParallelTrade'],
            'note' => $request['note'],
            'typeId' => (int)$result_explode[0],
            'type' => $result_explode[1],
            'link' => $request['link'],
            'isActive' => $request['isActive'],
            'alphabet' => $in,
        ];

//        dd($data);
        Parallel::create($data);
        return Redirect::to('/parallel');
    }


    public function edit($id)
    {
        $parallels = Parallel::findOrFail($id);
        return view('parallel.form.edit', compact('parallels'));
    }

    public function update(ParallelRequest $request, $id)
    {
        switch ($request['typeId']) {
            case 1:
                $type = 'fungicides';
                break;
            case 2:
                $type = 'insecticides';
                break;
            case 3:
                $type = 'acaricides';
                break;
            case 4:
                $type = 'nematocides';
                break;
            case 5:
                $type = 'rodenticides';
                break;
            case 6:
                $type = 'limatsides';
                break;
            case 7:
                $type = 'repellents';
                break;
            case 8:
                $type = 'pheromones';
                break;
            case 9:
                $type = 'herbicides';
                break;
            case 10:
                $type = 'desiccants';
                break;
            case 11:
                $type = 'regulators';
                break;
            default:
                $type = '';

        }

        $cyrillic= array(0=>'', 1=>'А', 2=>'Б', 3=>'В', 4=>'Г', 5=>'Д', 6=>'Е', 7=>'Ж', 8=>'З', 9=>'И', 10=>'Й',
            11=>'К', 12=>'Л', 13=>'М', 14=>'Н', 15=>'О', 16=>'П', 17=>'Р', 18=>'С',	19=>'Т', 20=>'У',
            21=>'Ф', 22=>'Х', 23=>'Ц', 24=>'Ч', 25=>'Ш', 26=>'Щ', 27=>'Ъ',	28=>'Ь', 29=>'Ю', 30=>'Я');

        $abc= trim(preg_replace("/[0-9]/", "", $request['product']));
        $abc1= trim(preg_replace("/-/", "", $abc));
        $abc2= trim(preg_replace("/.]/", "", $abc1));
        $abc3 = mb_substr($abc2, 0, 1);
        foreach ($cyrillic as $k=>$v){
            if(preg_match("/$abc3/iu", "$v")){
                $in=$k;
            }
        }

        $data = [
            'owner' => $request['owner'],
            'product' => $request['product'],
            'substances' => $request['substances'],
            'referenceProduct' => $request['referenceProduct'],
            'manufacturer' => $request['manufacturer'],
            'validReferenceProduct' => $request['validReferenceProduct'],
            'parallelTrade' => $request['parallelTrade'],
            'validParallelTrade' => $request['validParallelTrade'],
            'note' => $request['note'],
            'typeId' => (int)$request['typeId'],
            'type' => $type,
            'link' => $request['link'],
            'isActive' => $request['isActive'],
            'alphabet' => $in,
        ];
//        dd($data);
        $parallels = Parallel::findOrFail($id);
        $parallels->update($data);

        return Redirect::to('/parallel');
    }

}
