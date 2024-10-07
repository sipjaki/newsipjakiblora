<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class AdminDashboardController extends Controller
{
    //

    public function index()
    {
            
    $user = Auth::user();

    return view('backend.00_dashboard.index',[
        'title' => 'Admin Dashboard Sipjaki KBB',
        'user' => $user,
    ]);

    }
}
