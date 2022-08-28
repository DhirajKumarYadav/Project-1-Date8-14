<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Subscriber;
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
//==================================================================================================
    public function registeration(Request $req)
    {
        $data =new Login;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->password=Hash::make($req->password);
        $data->save();

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
        return redirect('/');
    }
//==================================================================================================
    public function subscriber(Request $req)
    {
        // return $req->input();
        $data=new Subscriber;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->save();
        return redirect('/');
    }
//==================================================================================================

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
