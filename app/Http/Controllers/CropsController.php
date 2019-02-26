<?php

namespace App\Http\Controllers;

use App\Acaricide;
use App\Crop;
use App\Http\Requests\AddPestRequest;
use App\Nematocides;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CropsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cultures = Crop::get();
        return view('crops.index', compact('cultures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crops.forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'group_id' => $request['group_id'],
            'name' => $request['name'],
            'latin_name' => $request['latin_name'],
            'cropDescription' => $request['cropDescription'],
        ];
        Crop::create($data);
//        dd($data);
        return Redirect::to('/crops');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crops = Crop::findOrFail($id);
        $acaricides = Crop::where('id', $id)
                        ->with('Acaricides')
                        ->with('Nematocides')
                        ->get()->toArray();
//        dd($acaricides);
        return view('crops.show', compact('crops', 'acaricides'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crops = Crop::findOrFail($id);

        return view('crops.forms.edit', compact('crops'));
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
        $crop = Crop::findOrFail($id);

        $data = [
            'group_id' => $request['group_id'],
            'name' => $request['name'],
            'latin_name' => $request['latin_name'],
            'cropDescription' => $request['cropDescription'],
        ];

        $crop->update($data);
//        dd($data);
        return Redirect::to('/crops');
    }

    // ACARICIDES
    public function acaricides_edit($id, $crop)
    {
        $crops = Crop::findOrFail($crop);
        $acaricide = Acaricide::findOrFail($id);
        return view('crops.pests.acaricides_edit', compact('crops', 'acaricide'));
    }

    public function acaricides_update(AddPestRequest $request, $id)
    {
        $data = [
            'product' => $request['product'],
            'productId' => $request['productId'],
            'dose' => $request['dose'],
            'note' => $request['note'],
            'minimumUse' => $request['minimumUse'],
            'disease' => $request['disease'],
            'afterNote' => $request['afterNote'],
            'quarantine' => $request['quarantine'],
            'category' => $request['category'],
            'practices' => $request['practices'],
            'isActive' => $request['isActive'],
        ];

        $acaricide = Acaricide::findOrFail($id);
        $acaricide->update($data);

        return Redirect::to('/crops/show/'.$acaricide->crop_id);
    }

    // NEMATOCIDES
    public function nematocides_edit($id, $crop)
    {
        $crops = Crop::findOrFail($crop);
        $nematocide = Nematocides::findOrFail($id);
        return view('crops.pests.nematocides_edit', compact('crops', 'nematocide'));
    }

    public function nematocides_update(AddPestRequest $request, $id)
    {
        $data = [
            'product' => $request['product'],
            'productId' => $request['productId'],
            'dose' => $request['dose'],
            'note' => $request['note'],
            'minimumUse' => $request['minimumUse'],
            'disease' => $request['disease'],
            'afterNote' => $request['afterNote'],
            'quarantine' => $request['quarantine'],
            'category' => $request['category'],
            'practices' => $request['practices'],
            'isActive' => $request['isActive'],
        ];

        $nematocide = Nematocides::findOrFail($id);
        $nematocide->update($data);

        return Redirect::to('/crops/show/'.$nematocide->crop_id);
    }

}
