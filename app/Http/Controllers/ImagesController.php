<?php
/**
 * Created by PhpStorm.
 * User: DelT
 * Date: 7.1.2018 г.
 * Time: 14:48 ч.
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Practices;
use App\Images;
use App\Http\Requests\ImageRequest;


class ImagesController
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
    public function create_image($id)
    {
        $practices = Practices::findOrFail($id);
        return view('templates.form.add-image', compact('practices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\PracticesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store_image(Request $request, $id)
    {
        $practices = Practices::findOrFail($id);
        $data = ([
            'imgPath'=> $request['imgPath'],
            'bgName'=> $request['bgName'],
            'imgTitle'=> $request['imgTitle'],
            'thumbPath'=> $request['thumbPath'],
            'thumbAlt'=> $request['thumbAlt'],
            'cultureId'=> $request['cultureId'],
            'thumbTitle'=> $request['thumbTitle'],
        ]);

        $images = new Images($data);
        dd($practices->images());
        $practices->images()->save($images);

//        Session::flash('message', 'Снимака е добавна успешно!');
        return Redirect::to('/template-practices/add_images/' . $practices->id);
    }


//    public function view_images($id) {
//        $practices = Practices::findOrFail($id);
//
//        $images = Pharmacy::where('inspector','!=',0)->lists('list_name', 'inspector')->toArray();
////        return view('templates.form.add-image', compact('practices'));
//        return view('templates.index', compact('practices', 'groups', 'cultures'));
//    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $practices = Practices::findOrFail($id);
//        return view('templates.form.edit', compact('practices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PracticesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($request, $id)
    {
//        $practices = Practices::findOrFail($id);
//        $data =([
//            'linkId'=> $request['linkId'],
//            'name'=> $request['name'],
//            'fullName'=> $request['fullName'],
//            'text'=> $request['text'],
//            'groupId'=> $request['groupId'],
//            'cultureId'=> $request['cultureId'],
//            'tablePiv'=> $request['tablePiv'],
//            'imgPath'=> $request['imgPath'],
//        ]);
//
//        $practices->fill($data);
//        $practices->save();
//
//        return Redirect::to('template-practices/show-culture');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){}
}