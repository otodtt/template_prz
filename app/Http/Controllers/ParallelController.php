<?php

namespace App\Http\Controllers;

use App\Parallel;
use Illuminate\Http\Request;

class ParallelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('parallel.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $firms = Parallel::select('name', 'id')->orderBy('alphabet', 'asc')->pluck('name', 'id')->all();
        return view('parallel.form.create');
    }
}
