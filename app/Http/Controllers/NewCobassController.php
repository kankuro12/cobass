<?php

namespace App\Http\Controllers;

use App\Models\GalleryType;
use App\Models\Slider;
use Illuminate\Http\Request;

class NewCobassController extends Controller
{
    public function index()

    {
        $sliders=Slider::all();
        return view('front.newPage.index', compact('sliders'));
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
        $gallery=GalleryType::all();

      
        return view('front.newPage.galllery',compact('gallery'));
       
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
