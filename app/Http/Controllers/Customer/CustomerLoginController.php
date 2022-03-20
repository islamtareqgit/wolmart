<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerLoginController extends Controller
{
    //show login form

    public function loginFormShow()
    {
      return view('customer.login');
    }

    // Customer login system


    public function CustomerLoginSystem(Request $request)
    {
      if(Auth::guard('customer')-> attempt([ 'email'  => $request-> email,'password'  => $request-> password])){

        return redirect()-> route('customer.dashboard');
     }else{

         return redirect()-> route('customer.login');
     }
    }
}
