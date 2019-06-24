<?php

namespace App\Http\Controllers;

class CenterController extends Controller{
    public function index(){
        return view('center.perCenterLink.default');
    }
}