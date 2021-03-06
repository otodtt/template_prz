<?php

namespace App\Http\Controllers;

use App\Pesticides;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\Paginator;
use Illuminate\Contracts\Support\JsonableInterface;

class GetProductsController extends Controller
{
    //  ФУНГИЦИДИ
    public function fungicides(Request $request)
    {
        $practices = Pesticides::where('pesticideId', 1)
            ->where('isActive', 0)
            ->orderBy('id', 'asc')
            ->with('Pestsubstanse')->with('Doses')
            ->get()
            ->toArray();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database_products', compact('practices'));
    }

    public function show_fungicide ($id)
    {
        $practices = Pesticides::where('pesticideId', 1)
            ->where('id', '=', $id)
            ->with('Pestsubstanse')->with('Doses')
            ->get()
            ->toArray();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database_products', compact('practices'));
    }

    //  АКАРИЦИДИ
    public function acaricides(Request $request)
    {
        $practices = Pesticides::where('pesticideId', 3)
                    ->where('isActive', 0)
                    ->orderBy('id', 'asc')
                    ->with('Pestsubstanse')->with('Doses')
                    ->get()
                    ->toArray();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database_products', compact('practices'));
    }

    public function show_acaricide ($id)
    {
        $practices = Pesticides::where('pesticideId', 3)
            ->where('id', '=', $id)
            ->with('Pestsubstanse')->with('Doses')
            ->get()
            ->toArray();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database_products', compact('practices'));
    }

    //  НЕМАТОЦИДИ
    public function nematocides(Request $request)
    {
        $practices = Pesticides::where('pesticideId', 4)
            ->where('isActive', 0)
            ->orderBy('id', 'asc')
            ->with('Pestsubstanse')->with('Doses')
            ->get()
            ->toArray();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database_products', compact('practices'));
    }

    public function show_nematocide ($id)
    {
        $practices = Pesticides::where('pesticideId', 4)
            ->where('id', '=', $id)
            ->with('Pestsubstanse')->with('Doses')
            ->get()
            ->toArray();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database_products', compact('practices'));
    }

    //  ЛИМАЦИДИ
    public function limatsides(Request $request)
    {
        $practices = Pesticides::where('pesticideId', 6)
            ->where('isActive', 0)
            ->orderBy('id', 'asc')
            ->with('Pestsubstanse')->with('Doses')
            ->get()
            ->toArray();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database_products', compact('practices'));
    }

    public function show_limatside ($id)
    {
        $practices = Pesticides::where('pesticideId', 6)
            ->where('id', '=', $id)
            ->with('Pestsubstanse')->with('Doses')
            ->get()
            ->toArray();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database_products', compact('practices'));
    }

    //  ФЕРОМОНИ
    public function pheromones(Request $request)
    {
        $practices = Pesticides::where('pesticideId', 8)
            ->where('isActive', 0)
            ->orderBy('id', 'asc')
            ->with('Pestsubstanse')->with('Doses')
            ->get()
            ->toArray();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database_products', compact('practices'));
    }

    public function show_pheromones ($id)
    {
        $practices = Pesticides::where('pesticideId', 8)
            ->where('id', '=', $id)
            ->with('Pestsubstanse')->with('Doses')
            ->get()
            ->toArray();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database_products', compact('practices'));
    }

    //  ДЕСИКАНТИ
    public function desiccants(Request $request)
    {
        $practices = Pesticides::where('pesticideId', 10)
            ->where('isActive', 0)
            ->orderBy('id', 'asc')
            ->with('Pestsubstanse')->with('Doses')
            ->get()
            ->toArray();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database_products', compact('practices'));
    }

    public function show_desiccants ($id)
    {
        $practices = Pesticides::where('pesticideId', 10)
            ->where('id', '=', $id)
            ->with('Pestsubstanse')->with('Doses')
            ->get()
            ->toArray();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database_products', compact('practices'));
    }

    //  Р. РЕГУЛАТОРИ
    public function regulators(Request $request)
    {
        $practices = Pesticides::where('pesticideId', 11)
            ->where('isActive', 0)
            ->orderBy('id', 'asc')
            ->with('Pestsubstanse')->with('Doses')
            ->get()
            ->toArray();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database_products', compact('practices'));
    }

    public function show_regulators ($id)
    {
        $practices = Pesticides::where('pesticideId', 11)
            ->where('id', '=', $id)
            ->with('Pestsubstanse')->with('Doses')
            ->get()
            ->toArray();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database_products', compact('practices'));
    }
}
