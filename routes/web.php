<?php

use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePostController;
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

/*

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
*/


// Main İndex
/*
Route::get('/',[MainHomeController::class, 'index'])->name('index');
Route::get('/aboutus',[MainHomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact',[MainHomeController::class, 'contact'])->name('contact');
Route::get('/whyhere',[MainHomeController::class, 'whyhere'])->name('whyhere');
Route::get('/login',[MainHomeController::class, 'login'])->name('login');
Route::get('/register',[MainHomeController::class, 'register'])->name('register');
*/
// HOME
Route::get('/',[HomeController::class, 'index'])->name('index');
Route::view('/login','home.login')->name('index');
Route::view('/register','home.register')->name('index');
Route::get('/post/{id}',[HomePostController::class, 'index'])->name('post_index');
Route::get('/categorypost/{id}',[HomeController::class,'categorypost'])->name('categorypost');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/contact',[HomeController::class, 'contact'])->name('home_contact');
Route::post('/storecontact',[HomeController::class, 'storecontact'])->name('storecontact');
Route::post('/storecomment',[HomeController::class, 'storecomment'])->name('storecomment');
Route::view('/loginuser','home.login')->name('loginuser');
Route::post('/loginusercheck',[HomeController::class,'loginusercheck'])->name('loginusercheck');
Route::get('/logoutuser',[HomeController::class,'logout'])->name('logoutuser');
Route::view('/registeruser','home.register')->name('registeruser');
Route::post('/registerstore',[HomeController::class,'registerstore'])->name('registerstore');


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


Route::get('/admin/settings',[SettingController::class,'index'])->name('settings');
Route::post('/admin/settings/store',[SettingController::class,'store'])->name('settings_store');
Route::post('/admin/settings/update',[SettingController::class,'update'])->name('settings_update');


Route::get('/admin/message',[AdminMessageController::class,'index'])->name('message_index');
Route::get('/admin/message/show/{id}',[AdminMessageController::class,'show'])->name('message_show');
Route::get('/admin/message/destroy/{id}',[AdminMessageController::class,'destroy'])->name('message_destroy');
Route::post('/admin/message/update/{id}',[AdminMessageController::class,'update'])->name('message_update');


Route::get('/admin/comment',[CommentController::class,'index'])->name('comment');
Route::get('/admin/comment/show/{id}',[CommentController::class,'show'])->name('comment_show');
Route::get('/admin/comment/destroy/{id}',[CommentController::class,'destroy'])->name('comment_destroy');
Route::post('/admin/comment/update/{id}',[CommentController::class,'update'])->name('comment_update');


