<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // return "Halo";
        if (Auth::user()->role === 'superadmin') {
            return view('super-admin.index');
        } elseif (Auth::user()->role === 'admin') {
            return view('admin.index');
        } elseif (Auth::user()->role === 'receptionist') {
            return view('receptionist.index');
        } else {
            return view('landing.index');
        }
    }
}
