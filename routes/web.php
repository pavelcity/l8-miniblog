<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\AdminkaController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;


use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ContactCtontroller;
use App\Http\Controllers\BlogCtontroller;







Route::get('', [HomePageController::class, 'index'])->name('home.page');
Route::get('/contact', [ContactCtontroller::class, 'index'])->name('contact.home');

Route::name('blog.')->prefix('blog/')->group(function(){
	Route::get('', [BlogCtontroller::class, 'index'])->name('home');
	Route::get('/detail', [BlogCtontroller::class, 'detail'])->name('detail');
});





// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');



# админка
Route::name('dashboard.')->prefix('dashboard/')->namespace('Admin')->middleware(['auth:sanctum', 'verified', 'web', 'auth'])->group(function () {

	Route::get('', [AdminkaController::class, 'index'])->name('home');

	#category
	Route::name('category.')->prefix('category/')->group(function () {
		Route::get('', [CategoryController::class, 'index'])->name('home');
		Route::get('create', [CategoryController::class, 'create'])->name('create');
		Route::post('store', [CategoryController::class, 'store'])->name('store');
		Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [CategoryController::class, 'update'])->name('update');
		Route::get('{id}/delete', [CategoryController::class, 'delete'])->name('delete');
	});

	#blog
	Route::name('blog.')->prefix('blog/')->group(function () {
		Route::get('', [BlogController::class, 'index'])->name('home');
		Route::get('create', [BlogController::class, 'create'])->name('create');
		Route::post('store', [BlogController::class, 'store'])->name('store');
		Route::get('{id}/edit', [BlogController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [BlogController::class, 'update'])->name('update');
		Route::get('{id}/delete', [BlogController::class, 'delete'])->name('delete');
	});


});









Route::get('logoutadminka', [AdminkaController::class, 'logoutAdminka'])->name('admin.logout');

Route::fallback(function () {
	abort(404);
});