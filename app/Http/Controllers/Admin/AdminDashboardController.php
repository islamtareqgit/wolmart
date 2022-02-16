<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller

// show admin dashboard
{
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }
}
