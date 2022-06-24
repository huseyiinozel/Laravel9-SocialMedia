<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sliderdata=Post::where('status','Aktif')->limit(4)->get();
        $postlist1=Post::where('status','Aktif')->limit(4)->get();
        return view('Home.index',[
            'sliderdata'=>$sliderdata,
            'postlist1'=>$postlist1,
        ]);

    }


}
