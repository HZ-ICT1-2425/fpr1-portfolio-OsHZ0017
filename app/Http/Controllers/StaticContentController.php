<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticContentController extends Controller
{
//    Returns the HomePage for the Project
    public function homePage()
    {
        return view('welcome');
    }

//    Returnst the About Page for the Project
    public function aboutMe()
    {
        return view('about_me');
    }

//    Returns the Grades-dashboard for the project
    public function dashboard()
    {
        return view('dashboard');
    }
}
