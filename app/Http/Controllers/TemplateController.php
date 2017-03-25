<?php

namespace App\Http\Controllers;

use App\Http\Requests\PracticesRequest;
use App\Practices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $has_image = 0;
        return view('templates.pages.introduction', compact('has_image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\PracticesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PracticesRequest $request)
    {
        Practices::create([
            'link_id'=> $request['link_id'],
            'name'=> $request['name'],
            'full_name'=> $request['full_name'],
            'text'=> $request['text'],
            'group_id'=> $request['group_id'],
            'culture_id'=> $request['culture_id'],
        ]);

//        Session::flash('message', 'Фирмата е добавена успешно!');
        return Redirect::to('/template-practices');
//        dd($request);
    }


    public function triticum()
    {
        $has_image = 1;
        return view('templates.pages.01_grain.triticum', compact('has_image'));
    }
    public function hordeum()
    {
        $has_image = 1;
        return view('templates.pages.01_grain.hordeum', compact('has_image'));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
