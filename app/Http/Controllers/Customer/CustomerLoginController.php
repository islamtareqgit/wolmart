<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerLoginController extends Controller
{
    //show login form

    public function loginFormShow()
    {
      return view('customer.login');
    }
}
