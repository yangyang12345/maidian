<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // 店铺状态，0待审核，1出售中，2表示已出售
        $list = DB::table('tmall')
            ->where('status','=',1)
            ->paginate(2);
        return view('front/tmall',['list'=>$list]);
    }

    public function tmall_new(){
        $list = DB::table('tmall_new')
            ->where('status','=',1)
            ->paginate(4);
        return view('front/tamll_new',['list'=>$list]);
    }

    public function other_store(){
        $list = DB::table('other')
            ->where('status','=',1)
            ->paginate(2);
        return view('front/other_store',['list'=>$list]);
    }

    public function sell_store(){
        return view('front/sell_store');
    }
}
