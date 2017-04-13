<?php

namespace App\Http\Controllers;

use App\Culture;
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
            'img_path'=> $request['img_path'],
        ]);

        return Redirect::to('template-practices/show-culture');
    }



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
        $practices = Practices::findOrFail($id);
        return view('templates.form.edit', compact('practices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PracticesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PracticesRequest $request, $id)
    {
        $practices = Practices::findOrFail($id);
        $data =([
            'link_id'=> $request['link_id'],
            'name'=> $request['name'],
            'full_name'=> $request['full_name'],
            'text'=> $request['text'],
            'group_id'=> $request['group_id'],
            'culture_id'=> $request['culture_id'],
            'img_path'=> $request['img_path'],
        ]);

        $practices->fill($data);
        $practices->save();

        return Redirect::to('template-practices/show-culture');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_culture()
    {
        $groups = array(1 =>'Зърненожитни',2 => 'Бобови', 3 => 'Технически', 4 => 'Зеленчуци',
                        5 => 'Зеленчуци в съоражения', 6 => 'Овощни', 7 => 'Ягодоплодни', 8 => 'Лоза');
        $practices = Practices::get();
        $cultures = Culture::get();

        return view('templates.index', compact('practices', 'groups', 'cultures'));
    }





    public function triticum()
    {
        $has_image = 1;
        return view('templates.pages.01_grain.triticum', compact('has_image'));
    }
    public function hordeum()
    {
        $has_image = 2;
        return view('templates.pages.01_grain.hordeum', compact('has_image'));
    }
    public function avena()
    {
        $has_image = 2;
        return view('templates.pages.01_grain.avena', compact('has_image'));
    }
    public function secale()
    {
        $has_image = 2;
        return view('templates.pages.01_grain.secale', compact('has_image'));
    }
    public function zea()
    {
        $has_image = 2;
        return view('templates.pages.01_grain.zea', compact('has_image'));
    }
    public function rodentia()
    {
        $has_image = 2;
        return view('templates.pages.01_grain.rodentia', compact('has_image'));
    }

    //////// БОБОВИ
    public function phaseolus()
    {
        $has_image = 2;
        return view('templates.pages.02_bean.phaseolus', compact('has_image'));
    }
    public function glycine()
    {
        $has_image = 2;
        return view('templates.pages.02_bean.glycine', compact('has_image'));
    }
    public function pisum()
    {
        $has_image = 2;
        return view('templates.pages.02_bean.pisum', compact('has_image'));
    }
    public function lens()
    {
        $has_image = 2;
        return view('templates.pages.02_bean.lens', compact('has_image'));
    }
    public function cicer()
    {
        $has_image = 2;
        return view('templates.pages.02_bean.cicer', compact('has_image'));
    }
    public function medicago()
    {
        $has_image = 2;
        return view('templates.pages.02_bean.medicago', compact('has_image'));
    }

    /////// ТЕХНИЧЕСКИ
    public function nicotiana()
    {
        $has_image = 2;
        return view('templates.pages.03_technical.nicotiana', compact('has_image'));
    }
    public function beta()
    {
        $has_image = 2;
        return view('templates.pages.03_technical.beta', compact('has_image'));
    }
    public function gossypium()
    {
        $has_image = 2;
        return view('templates.pages.03_technical.gossypium', compact('has_image'));
    }
    public function helianthus()
    {
        $has_image = 2;
        return view('templates.pages.03_technical.helianthus', compact('has_image'));
    }
    public function brassica()
    {
        $has_image = 2;
        return view('templates.pages.03_technical.brassica', compact('has_image'));
    }
    public function arachis()
    {
        $has_image = 2;
        return view('templates.pages.03_technical.arachis', compact('has_image'));
    }
}
