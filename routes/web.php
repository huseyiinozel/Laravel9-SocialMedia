<?php

use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePostController;

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

Route::get('/register',[MainHomeController::class, 'register'])->name('register');
*/
// HOME
Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/post/{id}',[HomePostController::class, 'index'])->name('post_index');
Route::get('/categorypost/{id}',[HomeController::class,'categorypost'])->name('categorypost');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/contact',[HomeController::class, 'contact'])->name('home_contact');
Route::view('/loginuser','home.login')->name('loginuser');
Route::post('/loginusercheck',[HomeController::class,'loginusercheck'])->name('loginusercheck');
Route::get('/logoutuser',[HomeController::class,'logout'])->name('logoutuser');
Route::view('/registeruser','home.register')->name('registeruser');
Route::post('/registerstore',[HomeController::class,'registerstore'])->name('registerstore');
Route::post('/storecontact',[HomeController::class, 'storecontact'])->name('storecontact');
Route::post('/storecomment',[HomeController::class, 'storecomment'])->name('storecomment');
Route::view('/loginadmin','admin.login')->name('loginadmin');
Route::post('/loginadmincheck',[HomeController::class,'loginadmincheck'])->name('loginadmincheck');

//User





//Admin

Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [AdminHomeController::class, 'adminindex'])->name('adminindex');

    Route::get('/admin/settings',[SettingController::class,'index'])->name('settings');
    Route::post('/admin/settings/store',[SettingController::class,'store'])->name('settings_store');
    Route::post('/admin/settings/update',[SettingController::class,'update'])->name('settings_update');



    Route::prefix('/category')->name('')->controller(CategoryController::class)->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
        Route::get('/show/{id}', [CategoryController::class, 'show'])->name('show');
        Route::get('/destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('/post')->name('')->controller(PostController::class)->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('post');
        Route::get('/create', [PostController::class, 'create'])->name('post_create');
        Route::post('/store', [PostController::class, 'store'])->name('post_store');
        Route::get('/edit/{id}', [PostController::class, 'edit'])->name('post_edit');
        Route::post('/update/{id}', [PostController::class, 'update'])->name('post_update');
        Route::get('/show/{id}', [PostController::class, 'show'])->name('post_show');
        Route::get('/destroy/{id}', [PostController::class, 'destroy'])->name('post_destroy');
    });



    Route::prefix('/message')->name('')->controller(AdminMessageController::class)->group(function () {
        Route::get('/',[AdminMessageController::class,'index'])->name('message_index');
        Route::get('/show/{id}',[AdminMessageController::class,'show'])->name('message_show');
        Route::get('/destroy/{id}',[AdminMessageController::class,'destroy'])->name('message_destroy');
        Route::post('/update/{id}',[AdminMessageController::class,'update'])->name('message_update');
    });

    Route::prefix('/comment')->name('')->controller(CommentController::class)->group(function () {
        Route::get('/',[CommentController::class,'index'])->name('comment');
        Route::get('/show/{id}',[CommentController::class,'show'])->name('comment_show');
        Route::get('/destroy/{id}',[CommentController::class,'destroy'])->name('comment_destroy');
        Route::post('/update/{id}',[CommentController::class,'update'])->name('comment_update');
    });

    Route::prefix('/user')->name('')->controller(AdminUserController::class)->group(function () {
        Route::get('/',[AdminUserController::class,'index'])->name('user');
        Route::get('/show/{id}',[AdminUserController::class,'show'])->name('user_show');
        Route::get('/destroy/{id}',[AdminUserController::class,'destroy'])->name('user_destroy');
        Route::post('/update/{id}',[AdminUserController::class,'update'])->name('user_update');
        Route::get('/destroyrole/{uid}/{rid}',[AdminUserController::class,'destroyrole'])->name('user_destroyrole');

    });





});

