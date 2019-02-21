<?php

namespace App\Http\Controllers;

use App\Pesticides;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\Paginator;
use Illuminate\Contracts\Support\JsonableInterface;

class GetProductsController extends Controller
{
    public function acaricides(Request $request)
    {
//        $practices = Pesticides::where('pesticideId', 1)->orderBy('name', 'asc')
        $practices = Pesticides::where('pesticideId', 3)->orderBy('id', 'asc')
                    ->with('Pestsubstanse')->with('Doses')
                    ->get()
                    ->toArray();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
//        dd($practices);
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
//        dd($practices);
        return view('templates.database_products', compact('practices'));
    }
}
