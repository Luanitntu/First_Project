<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;

class pagesControll extends Controller
{
	public function index(){
        $allphong = DB::table('phong')->get();
        return view('pages.index', compact('allphong'));
    }
    public function abouts(){
    	return view('pages.abouts');
    }
    public function room(){
    	return view('pages.rooms');
    }
    public function gallery(){
    	return view('pages.gallery');
    }
}
