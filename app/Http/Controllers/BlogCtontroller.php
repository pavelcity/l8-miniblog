<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogCtontroller extends Controller
{
    
	#index
	public function index () {
		return view ('pages.blog.index');
	}


	#detail
	public function detail () {
		return view ('pages.blog.detail');
	}
}
