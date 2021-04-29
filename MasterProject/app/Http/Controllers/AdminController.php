<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admins = Admin::all();
        return view('dashboard_veiw.manage_admin',compact('admins'));
    }

    public function validation($request)
    {
        $request->validate([
            'email' => 'required|email',
            'fullname' => 'required',
            'password' => 'required|min:8|max:16|confirmed',
            'password_confirmation' =>'required'
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
        Admin::create([
                'fullname' => $request['fullname'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
        ]);
        return redirect('/dashboard/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('dashboard_veiw.manage_admin_edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'email' => 'required|email',
            'fullname' => 'required',
            'password' => 'required|min:8|max:16|confirmed',
            'password_confirmation' =>'required'
        ]);

        $admin=Admin::find($admin->id);
        // Admin::create($request->all());
        $admin->fullname =$request->fullname;
        $admin->email =$request->email;
        $admin->password = Hash::make($request['password']);
        $admin->save();
        return redirect('/dashboard/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        Admin::findOrFail($admin->id)->delete();
        return redirect('/dashboard/admin');
    }


    public function usersread()
    {
        //
        $users =  User::all();
        return view('dashboard_veiw.manage_user',compact('users'));

    }

//    public function edituser($id)
//    {
//        $users =  User::where('id','=',$id)->first();
//        return view('dashboard_veiw.manage_user_edit',compact('users'));
//
//    }

//    public function userupdate(Request $request, User $users)
//    {
//        $users = User::find($users->id);
//        // Admin::create($request->all());
//        $users->name =$request->fullname;
//        $users->email =$request->email;
//        $users->password =$request->password;
//        $users->save();
//        return redirect('/dashboard/manage_user');
////        return view('dashboard_veiw.manage_user_edit');
//    }

    public function userdestroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect('/dashboard/manage_user');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin');
        $request->session()->forget('admin_email');
        return redirect('/admin/login');
    }
}
