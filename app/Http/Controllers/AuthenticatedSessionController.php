<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

   
   
}
