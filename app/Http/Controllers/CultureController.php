<?php

namespace App\Http\Controllers;

use App\Culture;
use Illuminate\Http\Request;

use App\Http\Requests\CultureRequest;
use Illuminate\Support\Facades\Redirect;

class CultureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cultures = Culture::get();
        return view('culture.index', compact('cultures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('culture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CultureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CultureRequest $request)
    {
        Culture::create([
            'group_id'=> $request['group_id'],
            'name'=> $request['name'],
            'latin_name'=> $request['latin_name'],
        ]);

        return Redirect::to('/culture');
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
        $culture = Culture::findOrFail($id);

        return view('culture.edit', compact('culture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CultureRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CultureRequest $request, $id)
    {
        $culture = Culture::findOrFail($id);
        $data = ([
            'group_id'=> $request['group_id'],
            'name'=> $request['name'],
            'latin_name'=> $request['latin_name'],
        ]);

        $culture->fill($data);
        $culture->save();

        return Redirect::to('/culture');
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
