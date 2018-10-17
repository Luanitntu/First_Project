<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesControll extends Controller
{
	public function index(){
        return view('pages.index');
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
