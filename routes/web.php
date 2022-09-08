<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/edit',[App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/updateprofile', [App\Http\Controllers\ProfileController::class, 'update'])->name('updateprofile');
Route::get('/p/create',[App\Http\Controllers\PostsController::class, 'create'])->name('posts.create');
Route::post('/p',[App\Http\Controllers\PostsController::class, 'store'])->name('posts.store');
Route::get('/p/edit/{id}',[App\Http\Controllers\PostsController::class, 'edit'])->name('posts.edit');
Route::post('/p/editconfirm/{id}',[App\Http\Controllers\PostsController::class, 'editconfirm'])->name('posts.editconfirm');
Route::post('/p/c/{id}',[App\Http\Controllers\CommentController::class, 'store'])->name('comment.store');
Route::get('/p/delete/{id}',[App\Http\Controllers\PostsController::class, 'delete'])->name('posts.delete');


Route::get('/p/{id}',[App\Http\Controllers\PostsController::class,'show'])->name('posts.show');
Route::get('/profile/{id}',[App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
