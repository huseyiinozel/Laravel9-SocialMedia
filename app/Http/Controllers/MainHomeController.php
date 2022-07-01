<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class MainHomeController extends Controller
{
    //

public function index(){
    $settings=Setting::first();

    return view('MainHome.index',['settings'=>$settings]);

}
public function aboutus(){

        return view('MainHome.aboutus');

    }


public function contact(){

        return view('MainHome.contact');

    }
public function whyhere(){

        return view('MainHome.whyhere');

    }
public function login(){

        return view('MainHome.login');

    }

public function register(){

        return view('MainHome.register');

    }

}
