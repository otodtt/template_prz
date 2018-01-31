<?php

namespace App\Http\Controllers;

use App\Culture;
use App\Http\Requests\PracticesRequest;
use App\Images;
use App\Practices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

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
            'linkId'=> $request['linkId'],
            'name'=> $request['name'],
            'fullName'=> $request['fullName'],
            'text'=> $request['text'],
            'groupId'=> $request['groupId'],
            'cultureId'=> $request['cultureId'],
            'tablePiv'=> $request['tablePiv'],
        ]);

//        var_dump(Request::all());
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
            'linkId'=> $request['linkId'],
            'name'=> $request['name'],
            'fullName'=> $request['fullName'],
            'text'=> $request['text'],
            'groupId'=> $request['groupId'],
            'cultureId'=> $request['cultureId'],
            'tablePiv'=> $request['tablePiv'],
            'imgPath'=> $request['imgPath'],
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

        $practices = Practices::with('Images')->get();
        $cultures = Culture::get();

        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);

        return view('templates.index', compact('practices', 'groups', 'cultures', 'json'));

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
     * @param \App\Http\Requests\Request  $request
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
//        dd($practices->images());
        $practices->images()->save($images);

        return Redirect::to('/template-practices/add_images/' . $practices->id);
    }


    public function triticum()
    {
//        $practices = Practices::where('cultureId', 1)->with('Images')->get();
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 1)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);

        return view('templates.database', compact('practices'));
//        $practices = Practices::findOrFail(1)->with('Images')->get();
//        $practices = Practices::with('Images')->get();
    }
    public function hordeum()
    {
//        $practices = Practices::where('cultureId', 2)->with('Images')->get();
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 2)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function avena()
    {
//        $practices = Practices::where('cultureId', 3)->with('Images')->get();
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 3)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function secale()
    {
//        $practices = Practices::where('cultureId', 4)->with('Images')->get();
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 4)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function zea()
    {
//        $practices = Practices::where('cultureId', 5)->with('Images')->get();
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 5)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function rodentia()
    {
        $has_image = 2;
        return view('templates.pages.01_grain.rodentia', compact('has_image'));
    }

    //////// БОБОВИ
    public function phaseolus()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 6)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function glycine()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 7)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function pisum()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 8)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function lens()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 9)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function cicer()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 10)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function medicago()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 11)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }

    /////// ТЕХНИЧЕСКИ
    public function nicotiana()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 12)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function beta()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 13)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function gossypium()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 14)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function helianthus()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 15)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function brassica()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 16)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function arachis()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 17)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }

    /////// ЗЕЛЕНЧУЦИ
    public function vegetables()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 18)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function potatoes()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 19)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function onion()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 20)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function cabbage()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 21)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function pumpkin()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 22)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
    public function leafy()
    {
        $practices = Practices::select('id', 'groupId', 'cultureId', 'linkId', 'name', 'text', 'tablePiv'
        )->where('cultureId', 23)->with('Images')->get();
        $json = json_encode($practices, JSON_UNESCAPED_UNICODE);
//        dd($json);
        return view('templates.database', compact('practices'));
    }
}
