<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    // show admin login form
    public function loginForm()
    {
        return view('admin.login');
    }
   // Admin Login  redirect

    public function AdminLoginRedirect()
    {
        return redirect()-> route('admin.login.form');
    }

    // Admin login system

    public function AdminLoginSystem(Request $request)
    {
        if(Auth::guard('admin')-> attempt([ 'email'  => $request-> email,'password'  => $request-> password])){

           return redirect()-> route('admin.dashboard');
        }else{

            return redirect()-> route('admin.login');
        }
    }

    // Admin Logout 

    public function AdminLogout()
    {
       Auth::guard('admin')-> logout();

       return redirect()-> route('admin.login');
    }
}
