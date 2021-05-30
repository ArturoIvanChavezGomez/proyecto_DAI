<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('administrator')){
            return view('dashboard-admins');
        } elseif (Auth::user()->hasRole('teacher')) {
            return view('dashboard-teachers');
        } elseif (Auth::user()->hasRole('student')) {
            return view('dashboard');
        }
    }
}
