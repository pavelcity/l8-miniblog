<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    
	#index 
	public function index () {
		$cats = Category::latest()->get();
		return view ('admin.category.index', compact('cats'));
	}



	#create
	public function create () {
		return view ('admin.category.create');
	}





	#store
	public function store (Request $request) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'обятельное поле'
		]);


		$cat = new Category;

		$cat->title = $request->title;
		$cat->save();
		
		return redirect()->route('dashboard.category.home');
	}








	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'обятельное поле'
		]);


		$cat = Category::find($id);

		$cat->update([
			'title' => $request->title
		]);

	
		return redirect()->route('dashboard.category.home');
	}






	#edit
	public function edit ($id) {
		$cat = Category::find($id);
		return view ('admin.category.edit', compact('cat'));
	}










	#delete
	public function delete ($id) {
		$cat = Category::find($id);
		$cat->delete();
		return redirect()->route('dashboard.category.home');
	}




}
