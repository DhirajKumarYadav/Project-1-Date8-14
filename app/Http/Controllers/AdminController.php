<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Login;

class AdminController extends Controller
{
//======================================================================================================
    public function addadmin()
    {
        return view('admin.newadmin');
    }
//======================================================================================================
    public function adminLayout()
    {
        return view('admin.layout');
    }
//======================================================================================================
public function newAdmin(Request $req)
{
    $data=new Login;
    $data->name=$req->name;
    $data->email=$req->email;
    $data->password=Hash::make($req->password);
    $data->admin_id=$req->admin_id;
    $data->save();
    return redirect('admin');
}
//======================================================================================================

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
