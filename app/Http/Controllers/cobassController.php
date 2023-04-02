<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cobassController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function about()
    {
        return view('front.about');
    }
    public function course()
    {
        return view('front.course');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function team()
    {
        return view('front.team');
    }
    public function testimonial()
    {
        return view('front.testimonial');
    }

    public function error()
    {
        return view('front.error');
    }
}
