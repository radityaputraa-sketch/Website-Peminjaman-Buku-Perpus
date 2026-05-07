<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthRedirectController extends Controller
{
    public function index()
    {
        if (auth()->user()->role === 'admin') {
            return redirect('/admin-dashboard');
        }

        return redirect('/user-dashboard');
    }
}