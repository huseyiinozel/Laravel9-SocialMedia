<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id', '=' ,0)->with('children')->get();
    }
    public function index(){
        $sliderdata=Post::where('status','Aktif')->limit(4)->get();
        $postlist1=Post::where('status','Aktif')->limit(4)->get();
        return view('Home.index',[
            'sliderdata'=>$sliderdata,
            'postlist1'=>$postlist1,
        ]);

    }
    public  function categorypost($id)
    {

        $category=Category::find($id);
        $post = DB::table('posts')->where('category_id',$id)->get();

        return view('home.categorypost',[
            'category'=>$category,
            'post'=>$post

        ]);
    }

}
