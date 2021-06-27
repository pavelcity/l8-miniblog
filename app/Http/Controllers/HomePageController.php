<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomePageController extends Controller
{
    
	#index
	public function index () {
		$blogs = Blog::latest()->get();
		return view ('pages.index', compact('blogs'));
	}
}
