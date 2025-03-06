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
use App\Models\Download;
use App\Models\Event;
use App\Models\News;
use App\Models\Notice;
class NewCobassController extends Controller
{
    private function getHomepageData()
    {
        return getSetting('homepage') ?? (object)[
            'program' => '',
            'why' => '',
            'event' => '',
            'news' => '',
            'about' => [],
            'about_title' => [],
        ];
    }
    private function getContactData()
    {
        return getSetting('contact') ?? (object)[
            'map' => '',
            'email' => '',
            'phone' => '',
            'addr' => '',
            'others' => [],
        ];
    }

    private function getMetaData()
    {
        return getSetting('meta') ?? (object)[
            'desc' => '',
            'image' => '',
            'keyword' => '',
        ];
    }
    public function index()
    {
        $sliders = Slider::all();
        $courses = Course::all(); // Fetch courses and pass to the view
        $teachers= teacher::all();//fetch teacher information
        $events = Event::all();
        $news = News::all();
        $testimonials = Testimonial::all(); // Fetch all testimonials
        $popup = Popup::where('active', 1)->first(); // Get the first active popup
        $data = $this->getHomepageData();

        return view('front.newPage.index', compact('sliders', 'courses', 'teachers','testimonials','popup','events','news','data'));
    }

    public function event()
    {
        return view('front.newPage.event');
    }

    public function notice()
    {
        $notices = Notice::all();  // You can apply filters or pagination if needed

        // Pass notices
        return view('front.newPage.notice', compact('notices'));
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
    public function showNotices()
    {
        $notices = Notice::all(); // Get all notices
        return view('front.newPage.notice', compact('notices')); // Pass the notices variable to the view
    }
    public function contact()
    {
        $data = $this->getContactData();
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
public function showDownloads(Request $request)
{
    $query = Download::query();

    if ($request->has('search') && !empty($request->search)) {
        $query->where('title', 'like', '%' . $request->search . '%')
              ->orWhere('description', 'like', '%' . $request->search . '%');
    }

    $downloads = $query->get();

    return view('front.newPage.downloads', compact('downloads'));
}




}

