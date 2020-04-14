<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{

    public function blog()
    {
        return view('pages/blog');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function about()
    {
        return view('pages/about');
    }
}
