<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRegister extends Controller
{
    public function validation($request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required|min:8|max:32',
            'mobile' => 'required | Digits:10'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
//        User::create($request->all());
        $user = new User();
        // Admin::create($request->all());
        $user->name =$request->input('name');
        $user->email =$request->input('email');
        $user->password =Hash::make($request->input('password'));
        $user->mobile =$request->input('mobile');
        $user->save();
        return redirect('/');
    }

    public function destroy($id) {
        User::findOrFail($id)->delete();
        return redirect()->back();
    }

}
