<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('user.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $data=new Post();
        $data->category_id=$request->category_id;
        $data->title=$request->title;
        $data->user_id=$request->user_id;
        $data->detail=$request->detail;
        $data->type=$request->category_id;
        $data->status=$request->status;



        if ($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect(route('user_profile',['id'=>$id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=User::find($id);
        $temp=Auth::user()->id;
        $comment=Comment::where('user_id',$temp)->get();
        $category=Category::all();
        $post=Post::where('user_id',$id)->get();
        return view('user.profile',[
        'data'=>$data,
            'post'=>$post,
            'category'=>$category,
            'comment'=>$comment
            ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =Post::find($id);

        $datalist =Category::all();
        return view('user.edit',[
            'data' =>$data,
            'datalist' => $datalist,


        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data =Post::find($id);
        $data->category_id=$request->category_id;
        $data->title=$request->title;
        $data->user_id=$request->user_id;
        $data->detail=$request->detail;
        $data->type=$request->category_id;
        $data->status=$request->status;



        if ($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect(route('user_post_edit',['id'=>$id]));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temp=Auth::user()->id;
        $data =Post::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect(route('user_profile',['id'=>$temp]));
    }
    public function commentdestroy($id)
    {
        $temp=Auth::user()->id;
        $data =Comment::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect(route('user_profile',['id'=>$temp]));
    }

}
