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
        $sort_input = Input::get('sort');
        $order_input = Input::get('order');
        $page = Input::get('page');

        if (isset($sort_input) && ($sort_input == 'undefined' || $sort_input == 'name')) {
            $sort = 'alphabet';
        }
        elseif ($sort_input == 'category') {
            $sort = 'category';
        } else {
            $sort = 'alphabet';
        }

        if (isset($order_input) ) {
            $order = $order_input;
        } else {
            $order = 'asc';
        }
//        dd($sort);
//        $acaricides = Pesticides::where('pesticideId', 1)->orderBy('id', 'desc')->get();
//        $practices = Pesticides::where('pesticideId', 1)->orderBy('alphabet', 'asc')->with('Pestsubstanse')->with('Doses')->get()->toArray();
        $practices = Pesticides::where('pesticideId', 1)->orderBy($sort, $order)
                    ->with('Pestsubstanse')->with('Doses')
                    ->get()
                    ->toArray();
//        return Response::json( array( 'success'=>true,'rows'=> json_decode( $practices->toJson() ) ) );
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
//        dd($practices);
        return view('templates.database_products', compact('practices', 'json'));
//        $practices = Practices::findOrFail(1)->with('Images')->get();
//        $practices = Practices::with('Images')->get();
    }
}
