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
}
