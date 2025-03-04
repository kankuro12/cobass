<?php

namespace App\Http\Controllers;

use App\Models\GalleryType;
use App\Models\Gallery;
use App\Models\Slider;
use App\Models\Course;
use App\Models\teacher;
use App\Models\Setting;
use App\Models\testimonial;
use App\Models\Popup;
use Illuminate\Http\Request;
use App\Models\Contact;
class NewCobassController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $courses = Course::all(); // Fetch courses and pass to the view
        $teachers= teacher::all();//fetch teacher information
        $testimonials = Testimonial::all(); // Fetch all testimonials
        $popup = Popup::where('active', 1)->first(); // Get the first active popup

        return view('front.newPage.index', compact('sliders', 'courses', 'teachers','testimonials','popup'));
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

     // Show all gallery albums
     public function gallery()
     {
        $galleryTypes = GalleryType::with('galleries')->get();
        return view('front.newPage.gallery', compact('galleryTypes'));
     }

     // Show images inside a selected album
     public function galleryImages($id)
     {
         $galleryType = GalleryType::with('galleries')->findOrFail($id);
         return view('front.newPage.gallery_images', compact('galleryType'));
     }

    public function about()
    {
        return view('front.newPage.about');
    }

    public function contact()
    {
        $contact = Setting::first(); // Fetch contact details from database
        return view('front.newPage.contact', compact('contact'));
    }
    public function submitContact(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    // Save to database (optional)
    Contact::create($request->all());

    return back()->with('success', 'Message sent successfully!');
}
    public function courseDetail()
    {
        return view('front.newPage.courseDetail');
    }
    public function showCourse($id)
{
    // Fetch the current course
    $course = Course::findOrFail($id);

    // Fetch other courses (excluding the current one)
    $otherCourses = Course::where('id', '!=', $id)->get();

    // Pass the current course and other courses to the view
    return view('front.newPage.courseDetail', compact('course', 'otherCourses'));
}
}

