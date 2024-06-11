<?php

namespace App\Http\Controllers;

class HomeController
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        return view('dashboard');
    }
}
