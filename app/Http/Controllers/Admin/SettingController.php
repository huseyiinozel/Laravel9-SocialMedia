<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Setting::first();
        if ($data==null)
        {
            $data = new Setting();
            $data->title = 'Project Title';
            $data->id= 1;
            $data->save();
            $data=Setting::first();


        }

        return view("admin.settings.index",['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Setting();
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->company=$request->company;
        $data->address=$request->address;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->smtpserver=$request->smtpserver;
        $data->smtpemail=$request->smtpemail;
        $data->smtppassword=$request->smtppassword;
        $data->smtpport=$request->smtpport;
        $data->facebook=$request->facebook;
        $data->instagram=$request->instagram;
        $data->twitter=$request->twitter;
        $data->youtube=$request->youtube;
        $data->aboutus=$request->aboutus;
        $data->contact=$request->contact;
        $data->references=$request->references;
        $data->status=$request->status;
        $data->save();
        return redirect('admin/settings');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=1;

        $data = Setting::find($id);
        $data->title= $request->input('title');
        $data->keywords= $request->input('keywords');
        $data->description= $request->input('description');
        $data->company= $request->input('company');
        $data->address= $request->input('address');
        $data->phone= $request->input('phone');
        $data->email= $request->input('email');
        $data->smtpserver= $request->input('smtpserver');
        $data->smtpemail= $request->input('smtpemail');
        $data->smtppassword= $request->input('smtppassword');
        $data->smtpport= $request->input('smtpport');
        $data->facebook= $request->input('facebook');
        $data->instagram= $request->input('instagram');
        $data->twitter= $request->input('twitter');
        $data->youtube= $request->input('youtube');
        $data->aboutus= $request->input('aboutus');
        $data->contact= $request->input('contact');
        $data->references= $request->input('references');
        $data->status= $request->input('status');


        $data->save();
        return redirect()->route('admin.settings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
