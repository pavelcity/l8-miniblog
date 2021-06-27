<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    
	#index
	public function index () {
		return view ('pages.index');
	}
}
