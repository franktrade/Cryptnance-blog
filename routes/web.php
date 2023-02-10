<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
 
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

Route::get('/',[pagescontroller::class, 'index']);
// Route::get('/blog',[postscontroller::class,'index']);
Route::controller(App\Http\Controllers\postsController::class)->group(function () {
  Route::get('/blog', 'index');
  Route::get('/blog/create', 'create')->name('create');
  Route::post('blog', 'store')->name('store');
  Route::get('/index/about', 'about');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

