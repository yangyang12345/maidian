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
        dd(1);
        return view('front/index');
    }
}
