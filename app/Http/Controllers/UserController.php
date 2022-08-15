<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
//================================================================================================
    public function login()
    {
        return view('front.login');
    }
//====================================================================================================
    public function register()
    {
        return view('front.register');
    }
//==================================================================================================
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkLogin(Request $req)
    {
        // return $req->input();
        $user= Login::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "UserName or Password incorrect";
        }
        else
        {
            $req->session()->put('user',$user);
          return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
}
