<?php

namespace App\Http\Controllers;

use App\Models\GalleryType;
use App\Models\Slider;
use App\Models\Course;
use App\Models\teacher;
use Illuminate\Http\Request;
class NewCobassController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $courses = Course::all(); // Fetch courses and pass to the view
        $teachers= teacher::all();//fetch teacher information

        return view('front.newPage.index', compact('sliders', 'courses', 'teachers'));
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
        $courses = Course::all(); // Fetch courses for the course page
        return view('front.newPage.course', compact('courses'));
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

    public function courseDetail()
    {
        return view('front.newPage.courseDetail');
    }
}
