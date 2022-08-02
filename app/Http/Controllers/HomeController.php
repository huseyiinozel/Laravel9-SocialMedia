<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Setting;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\True_;
use function MongoDB\Driver\Monitoring\removeSubscriber;

class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id', '=' ,0)->with('children')->get();
    }
    public function index(){
        $sliderdata=Post::where('status','Aktif')->limit(4)->get();
        $postlist1 = DB::table('posts')
            ->orderBy('id', 'desc')
            ->get();

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
            return redirect()->route('contact')->with('errorcontact','error');
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->ip=request()->ip();
        $data->save();


        return redirect()->route('home_contact')->with('successcontact','error');


    }
    public function contact(){
        $settings=Setting::first();
        return view('home.contact',[
            'settings'=>$settings
        ]);

    }
    public function storecomment(Request $request){
        $data=new Comment();

        $data->user_id=1; //$request->user_id;
        $data->post_id=$request->post_id;
        $data->review=$request->review;
        $data->ip=request()->ip();
        $data->save();


        return redirect()->route('post_index',['id'=>$data->post_id])->with('successcomment','error');


    }
    public function loginusercheck(Request $request)
    {
        $ad = $request->username;
        $sifre=$request->password;
        $name =User::where('username',$ad)->first();
        $pass =User::where('password',$sifre)->first();
        if ($name == null or $pass == null){
            return redirect('/loginuser');
        }
        if ($ad == null or $sifre == null){
            return redirect('/loginuser');
        }


        if ($name->username == $ad and $pass->password == $sifre){

            Auth::login($name);
            return redirect('/')->with('success','başarılı');
        }


    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('logout','logout');



    }
    public function registerstore(Request $request){



        $data=new User();

        $data->username=$request->username;
        $name =User::where('username',$request->username)->first();
        $data->password=$request->password;
        $data->email=$request->email;
        $email =User::where('email',$request->email)->first();
        $data->age=$request->age;
        $data->gender=$request->gender;
        $data->mac=exec('getmac');
        $data->ip=request()->ip();

        if ($name == True){
            return redirect('/registeruser')->with('errorregister','errorregister');

        }
        if ($email == True){
            return redirect('/registeruser')->with('erroremail','erroremail');

        }
        if ($data->username == null or $data->password == null or $data->email == null or $data->age == null or
            $data->gender == null ){
            return redirect('/registeruser')->with('errornull','errornull');
        }

        $data->save();

        $rol = new UserRole();
        $rol->role_id=3;
        $rolid=User::where('username',$request->username)->first();
        $rol->user_id=$rolid->id;

        $rol->save();

        Auth::login($data);



        return redirect('/')->with('register','register');


    }













}
