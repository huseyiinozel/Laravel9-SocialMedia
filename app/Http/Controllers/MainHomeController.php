<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainHomeController extends Controller
{
    //

public function index(){

    return view('MainHome.index');

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
