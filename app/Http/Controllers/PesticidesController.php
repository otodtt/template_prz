<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesticides;

class PesticidesController extends Controller
{
    public function index()
    {
        return view('products.index');
    }


    public function deactivated()
    {
        $pesticides = Pesticides::where('id', '>', 0)->where('isActive', 1)->orderBy('alphabet', 'asc')->get();
//        dd($pesticides);
        return view('products.deactivated', compact('pesticides'));
    }



    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
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
