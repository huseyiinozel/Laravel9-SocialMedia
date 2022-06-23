<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
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
// deneme

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Main İndex
Route::get('/',[MainHomeController::class, 'index'])->name('index');
Route::get('/aboutus',[MainHomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact',[MainHomeController::class, 'contact'])->name('contact');
Route::get('/whyhere',[MainHomeController::class, 'whyhere'])->name('whyhere');


// HOME
Route::get('/home',[HomeController::class, 'index'])->name('index');



//Admin
Route::get('/admin',[AdminHomeController::class,'index'])->name('adminindex');

Route::get('/admin/category',[CategoryController::class,'index'])->name('categories');
Route::get('/admin/category/create',[CategoryController::class,'create'])->name('create');
Route::post('/admin/category/store',[CategoryController::class,'store'])->name('store');
Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit'])->name('edit');
Route::post('/admin/category/update/{id}',[CategoryController::class,'update'])->name('update');
Route::get('/admin/category/show/{id}',[CategoryController::class,'show'])->name('show');
Route::get('/admin/category/destroy/{id}',[CategoryController::class,'destroy'])->name('destroy');



Route::get('/admin/post',[PostController::class,'index'])->name('post');
Route::get('/admin/post/create',[PostController::class,'create'])->name('post_create');
Route::post('/admin/post/store',[PostController::class,'store'])->name('post_store');
Route::get('/admin/post/edit/{id}',[PostController::class,'edit'])->name('post_edit');
Route::post('/admin/post/update/{id}',[PostController::class,'update'])->name('post_update');
Route::get('/admin/post/show/{id}',[PostController::class,'show'])->name('post_show');
Route::get('/admin/post/destroy/{id}',[PostController::class,'destroy'])->name('post_destroy');
