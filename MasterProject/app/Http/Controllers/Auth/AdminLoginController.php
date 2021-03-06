<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct(){

        $this->middleware('guest:admin')->except('adminLogout');
    }
    public function showLoginForm(){
        return view ('auth.admin_login');
    }

    public function login(Request $request){

//        return true;
        //Validate the form data
        $this->validate($request, [
           'email' => 'required|email',
           'password' => 'required|min:8'
        ]);
        //Attempt to loh the user in
        if (Auth::guard('admin')->attempt(['email' => $request->email , 'password' => $request->password], $request->remember)) {
            //if successful, then redirect to their intended location
            return redirect()->intended(route('admin.dashboard'));


        }
        // if uneccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email' , 'remember'));

    }

    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
