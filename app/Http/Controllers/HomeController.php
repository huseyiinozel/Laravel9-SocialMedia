<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Setting;
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
    public function about(){
        $settings=Setting::first();
        $category=Category::all();

       return view('home.aboutus',[
           'settings'=>$settings,
           '$category'=>$category,
       ]);

    }
    public function storecontact(Request $request){
        $data=new Contact();
        $data->name=$request->name;
        if ($data->name==null)
            return redirect()->route('contact')->with('error','error');
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->ip=request()->ip();
        $data->save();


        return redirect()->route('contact')->with('success','error');


    }
    public function contact(){
        $settings=Setting::first();
        return view('home.contact',[
            'settings'=>$settings
        ]);

    }



}
