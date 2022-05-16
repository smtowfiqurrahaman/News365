<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('id', function () {
//     return view('frontend.categoryposts');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

// forFrontend
Route::get('view/{slug}',[App\Http\Controllers\Frontend\FrontendController::class,'viewcategory'])->name('view.category');

Route::get('view/post/{post}',[App\Http\Controllers\Frontend\FrontendController::class,'show']);

// for home 

Route::get('post/{post}',[App\Http\Controllers\Admin\PostController::class,'show']);



Auth::routes();

Route::group(['prefix' => 'admin', 'middleware'=> 'auth'],function(){
	Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

Route::resource('post',PostController::class);
Route::resource('category',CategoryController::class);

});




