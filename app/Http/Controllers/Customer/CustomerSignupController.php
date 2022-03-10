<?php

namespace App\Http\Controllers\Customer;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class CustomerSignupController extends Controller
{
    public function signupFormShow()
    {
        return view('customer.signup');
    }

    public function create(Request $request)
    {
        Customer::create([

         'name'  => $request-> name,
         'email'  => $request-> email,
         'password'  => Hash::make($request-> password),
         'cell'  => $request-> cell,


        ]);

        return redirect('customer/login');
    }
}
