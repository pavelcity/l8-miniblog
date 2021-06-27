<?php

use Illuminate\Support\Facades\Route;

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

});









Route::get('logoutadminka', [AdminkaController::class, 'logoutAdminka'])->name('admin.logout');

Route::fallback(function () {
	abort(404);
});