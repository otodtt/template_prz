<?php

namespace App\Http\Controllers;

use App\Nematocides;
use Illuminate\Http\Request;

class NematocidesController extends Controller
{
    public function index()
    {
        $nematocides = Nematocides::where('pesticideId', 4)->where('isActive', 0)->orderBy('alphabet', 'asc')->get();
//        dd($acaricides);
        return view('nematocides.index', compact('nematocides'));
    }
}
