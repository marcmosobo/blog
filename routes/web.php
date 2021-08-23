<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

//Route::get('/', function () {
//    return view('home');
//});
//front end routes (info accessible to public)
Route::get('/',[App\Http\Controllers\FrontEndController::class,'index']);
Route::get('post',[\App\Http\Controllers\FrontEndController::class,'post']);
Route::get('about',[\App\Http\Controllers\FrontEndController::class,'about']);
Route::get('contact',[\App\Http\Controllers\FrontEndController::class,'contact']);
Route::get('all_categories',[\App\Http\Controllers\FrontEndController::class,'allCategory']);
Route::get('single_post',[\App\Http\Controllers\FrontEndController::class,'singlePost']);
Route::get('all_posts',[\App\Http\Controllers\FrontEndController::class,'allPost']);
Route::get('dark_mode',[\App\Http\Controllers\FrontEndController::class,'darkMode']);
Route::get('authors',[\App\Http\Controllers\FrontEndController::class,'author']);
Route::get('single_author/{id}',[\App\Http\Controllers\FrontEndController::class,'singleAuthor']);
Route::get('single_post/{id}',[\App\Http\Controllers\FrontEndController::class,'singlePost']);


//auth routes
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts', App\Http\Controllers\PostController::class);
Route::resource('postMetas', App\Http\Controllers\PostMetaController::class);
Route::resource('postComments', App\Http\Controllers\PostCommentController::class);
Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::resource('postCategories', App\Http\Controllers\PostCategoryController::class);
Route::resource('tags', App\Http\Controllers\TagController::class);
Route::resource('postTags', App\Http\Controllers\PostTagController::class);
Route::resource('users', App\Http\Controllers\UserController::class);
