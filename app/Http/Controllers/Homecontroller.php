<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function home()
    {
        return view('Home');
    }

    public function about()
    {
        return view('About');
    }

    public function resume()
    {
        return view('Resume');
    }

    public function services()
    {
        return view('Services');
    }

    public function skills()
    {
        return view('Skills');
    }

    public function projects()
    {
        return view('Projects');
    }

    public function blog()
    {
        return view('Blog');
    }

    public function contacts()
    {
        return view('contacts');
    }

}
