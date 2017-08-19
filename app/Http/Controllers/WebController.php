<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    
	public function home(){
		return view('admin.home');
	}

	public function incident){
		return view('admin.incident');
	}

	public function about(){
		return view('admin.about');
	}

	public function contact(){
		return view('admin.contact');
	}

}
