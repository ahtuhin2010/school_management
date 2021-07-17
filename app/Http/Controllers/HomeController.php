<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('backend.layouts.home');
    // }

    public function indexAdmin()
    {
        return view('backend.layouts.home');
    }

    public function indexTeacher()
    {
        return view('teacher.layouts.home');
    }
    public function indexStudent()
    {
        return view('student.layouts.home');
    }
    public function indexParent()
    {
        return view('parent.layouts.home');
    }
}
