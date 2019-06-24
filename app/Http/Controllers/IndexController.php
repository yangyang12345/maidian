<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

   
    public function index()
    {
        return view('front/index');
    }

    public function tmall(){
        return view('front/tmall');
    }

    public function tmall_new(){
        return view('front/tamll_new');
    }

    public function other_store(){
        return view('front/other_store');
    }

    public function sell_store(){
        return view('front/sell_store');
    }
}
