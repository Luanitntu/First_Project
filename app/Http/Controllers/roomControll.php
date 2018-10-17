<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\phong;

class roomControll extends Controller
{
    // phong
    public function phong(){
        $phongbt = phong::where('num', 1)->get();
        $phongcc = phong::where('num', 2)->get();
        $phongvip = phong::where('num',3)->get();
        return view('pages.rooms', compact('tenphong','phongbt', 'phongcc', 'phongvip'));
    }
    public function getchitiet(Request $req){
        $tenphong1 = phong::where('id', $req->id)->first();
        return view('pages.roomdetails', compact('tenphong1'));
    }
    public function dangkiphong(Request $re){
        $tenphong = phong::where('id', $re->id)->first();
        return view('pages.dangkiphong', compact('tenphong'));
    }
    
}
