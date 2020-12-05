<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Requests\UserApplication;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Users = Users::all();
        return view('user', ['users'=>$Users, 'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Users = Users::all();
        return view('user', ['users'=>$Users, 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserApplication $request)
    { 
        $Users = new Users();
        $Users->username    = $request->input('username');
        $Users->email       = $request->input('email');
        $Users->password    = $request->input('password');
        $Users->mobile      = $request->input('mobile');
        $Users->name        = $request->input('name');
        $Users->surname     = $request->input('surname');
        $Users->job_title   = $request->input('job_title');
        $Users->bio         = $request->input('bio');
        $Users->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $User = Users::find($id);
        $Users = Users::all();
        return view('user', ['user'=>$User, 'users'=>$Users, 'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $User = Users::find($id);
        $Users = Users::all();
        return view('user', ['user'=>$User, 'users'=>$Users, 'layout'=>'edit']);
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
        $User = Users::find($id);
        $User->username    = $request->input('username');
        $User->email       = $request->input('email');
        $User->password    = $request->input('password');
        $User->mobile      = $request->input('mobile');
        $User->name        = $request->input('name');
        $User->surname     = $request->input('surname');
        $User->job_title   = $request->input('job_title');
        $User->bio         = $request->input('bio');
        $User->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $User = Users::find($id);
        $User->delete();
        return redirect('/');
    }
}
