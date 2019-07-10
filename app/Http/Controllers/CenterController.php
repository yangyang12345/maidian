<?php

namespace App\Http\Controllers;

class CenterController extends Controller{
    public function index(){
        return view('center.perCenterLink.default');
    }

    public function iwantsell(){
        return view('center.perCenterLink.iWantsell');
    }
}