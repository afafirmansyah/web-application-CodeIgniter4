<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function password()
    {
        return view('auth/password');
    }
    public function redirect()
    {
        return view('auth/redirect');
    }
    public function register()
    {
        return view('auth/register');
    }
}
