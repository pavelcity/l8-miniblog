<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class CategoryController extends Controller
{
    
	#index
	public function index ($slug) {
		// $category = Category::firstOrFail();
		// $blogs = $category->blogs()->get();

		$category = Category::where('slug', $slug)->firstOrFail();
		$blogs = $category->blogs()->get();
		return view ('pages.category.index', compact('blogs', 'category'));
	}






}
