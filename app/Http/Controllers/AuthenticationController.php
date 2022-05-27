<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function access()
    {
        return view('login');
    }
    public function test()
    {
        return view('web.profile.test');
    }
    public function logout()
    {
        session_start();
        $_SESSION['user_master'] = null;
        return redirect('/');
    }
    public function adminlogout()
    {
        session_start();
        $_SESSION['admin_master'] = null;
        return redirect('/access');
    }
    public function changePassword()
    {
        session_start();
        $_SESSION['admin_master'] = null;
        return redirect('/access');
    }
}
