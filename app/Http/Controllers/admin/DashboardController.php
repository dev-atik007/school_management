<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if(Auth::user()->user_type == 1)
        {
            return view('dashboard');
        }
        else if(Auth::user()->user_type == 2)
        {
            return view('pages.teacher.dashboard');
        }
        else if(Auth::user()->user_type == 3)
        {
            return view('pages.student.dashboard');
        }
        else if(Auth::user()->user_type == 4)
        {
            return view('pages.parent.dashboard');
        }
        
    }
}
