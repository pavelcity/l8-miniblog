<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use Image;

class BlogController extends Controller
{
    
	#index 
	public function index () {
		$blog = Blog::latest()->get();
		return view ('admin.blog.index', compact('blog'));
	}



	#create
	public function create () {
		$cats = Category::get();
		return view ('admin.blog.create', compact('cats'));
	}





	#store
	public function store (Request $request) {
		$this->validate($request, [
			'category_id' => 'required',
			'title' => 'required',
		], [
			'category_id.required' => 'укажите категорию',
			'title.required' => 'обязательное поле',
		]);


		$blog = new Blog;

		$pic = $request->file('pic');


		// **
		if(isset($pic)) {
			$filenamepic = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();

			Image::make($pic)->resize(750, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/blog/' . $filenamepic);
		}


		// **
		if(isset($pic)) {
			$picture = 'uploads/blog/' . $filenamepic;
		}


		// **
		if(isset($picture)) {
			$blog->pic = $picture;
		}



		$blog->category_id = $request->category_id;
		$blog->title = $request->title;
		$blog->short = $request->short;
		$blog->descr = $request->descr;

		$blog->save();

		return redirect()->route('dashboard.blog.home');
	}







	#edit
	public function edit ($id) {
		$cats = Category::get();
		$blog = Blog::find($id);
		return view ('admin.blog.edit', compact('cats', 'blog'));
	}







	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'title' => 'required',
		], [
			'title.required' => 'обязательное поле',
		]);

 

		$blog = Blog::find($id);

		$pic = $request->file('pic');
		$oldpic = $request->oldpic;


		// **
		if(isset($pic)) {
			$filename = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
			$picture = 'uploads/blog/' . $filename;

			if(isset($oldpic)) {
				unlink($oldpic);
			}

			$blog->update([
				'pic' => $picture
			]);

			Image::make($pic)->resize(750, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/blog/' . $filename);
		}




		$blog->update([
			'category_id' => $request->category_id,
			'title' => $request->title,
			'short' => $request->short,
			'descr' => $request->descr,
		]);

		return redirect()->route('dashboard.blog.home');
	}








	#delete
	public function delete ($id) {
		$blog = Blog::find($id);


		$delpic = $blog->pic;

		if(isset($delpic)) {
			unlink($delpic);
		}

		$blog->delete();

		return redirect()->route('dashboard.blog.home');
	}




	
}
