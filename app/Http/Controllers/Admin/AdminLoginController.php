<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    
    public function loginForm()
    {
        return view('admin.login');
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
}
