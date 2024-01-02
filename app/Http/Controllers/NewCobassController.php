<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewCobassController extends Controller
{
    public function index()
    {
        return view('front.newPage.index');
    }
    public function event()
    {
        return view('front.newPage.event');
    }
    public function notice()
    {
        return view('front.newPage.notice');
    }
    public function course()
    {
        return view('front.newPage.course');
    }
    public function gallery()
    {
        return view('front.newPage.galllery');
    }
    public function about()
    {
        return view('front.newPage.about');
    }
    public function contact()
    {
        return view('front.newPage.contact');
    }
    public function courseDeatil()
    {
        return view('front.newPage.courseDetail');
    }
}
