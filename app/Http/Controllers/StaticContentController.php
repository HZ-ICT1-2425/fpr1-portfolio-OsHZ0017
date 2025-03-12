<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticContentController extends Controller
{
    public function homePage()
    {
        return view('home');
    }

    public function aboutMe()
    {
        return view('about_me');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
