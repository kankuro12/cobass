<?php

namespace App\Http\Controllers;

use App\Models\GalleryType;
use App\Models\Gallery;
use App\Models\Slider;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\Popup;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Download;
use App\Models\Event;
use App\Models\News;
use App\Models\Notice;
use App\Models\Add;
use App\Models\Facility;
class NewCobassController extends Controller
{
    private function getHomepageData()
    {
        return getSetting('homepage') ?? (object) [
            'program' => '',
            'why' => '',
            'event' => '',
            'news' => '',
            'about' => [],
            'about_title' => [],
        ];
    }
    private function getMetaData()
    {
        return getSetting('meta') ?? (object) [
            'desc' => '',
            'image' => '',
            'keyword' => '',
        ];
    }
    public function index()
    {
        // Fetch achievement data from the Add model
        $achievements = Add::whereIn('key', ['students', 'graduates', 'awards', 'faculties'])->get();

        // Map data to an array with keys like 'students', 'graduates', etc.
        $achievementData = $achievements->keyBy('key');
        $sliders = Slider::all();
        $courses = Course::all(); // Fetch courses and pass to the view
        $teachers = teacher::all();//fetch teacher information
        $events = Event::all();
        $news = News::all();
        $testimonials = Testimonial::all(); // Fetch all testimonials
        $popups = Popup::where('active', 1)->get(); // Get the first active popup
        $data = $this->getHomepageData();


        // Fetch the facilities data, assuming these are the 4 facilities
        $facility = Facility::all();  // Example: Fetch the first facility

        return view('front.newPage.index', compact('sliders', 'courses', 'teachers', 'testimonials', 'popups', 'events', 'news', 'data', 'achievementData', 'facility'));
    }

    public function event()
    {
        $courses = Course::all(); // Fetch courses and pass to the view
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
        return view('front.newPage.contact');
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
    public function showFacilities()
    {
        // Fetch the facilities data, assuming these are the 4 facilities
        $facility1 = Facility::find(1);  // Example: Fetch the first facility
        $facility2 = Facility::find(2);  // Example: Fetch the second facility
        $facility3 = Facility::find(3);  // Example: Fetch the third facility
        $facility4 = Facility::find(4);  // Example: Fetch the fourth facility

        return view('front.newPage.index', compact('facility1', 'facility2', 'facility3', 'facility4'));
    }
    public function showAchievements()
    {
        // Fetch achievement data from the Add model
        $achievements = Add::whereIn('key', ['students', 'graduates', 'awards', 'faculties'])->get();

        // Map data to an array with keys like 'students', 'graduates', etc.
        $achievementData = $achievements->keyBy('key');

        return view('front.newPage.achievement', compact('achievementData'));
    }
    public function showNews($id)
    {
        $news = News::findOrFail($id);
        $otherNews = News::where('id', '!=', $id)->latest()->take(5)->get(); // Fetch 5 other news items

        return view('front.newPage.add.newsview-details', compact('news', 'otherNews'));
    }
    public function listEvents(Request $request)
    {
        $query = Event::query();

        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $events = $query->get();
        return view('front.newPage.add.eventview', compact('events'));
    }

    public function showEvent($id)
    {
        $event = Event::findOrFail($id);

        // Get other events excluding the current one
        $showother = Event::where('id', '!=', $id)->latest()->take(4)->get();

        return view('front.newPage.add.eventview-details', compact('event', 'showother'));
    }    public function newsList(Request $request)
    {
        $query = News::latest(); // Latest news first

        // If search is present, filter results
        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $news = $query->paginate(9); // Show 9 news per page
        $events = Event::all();

        return view('front.newPage.news-list', compact('news', 'events'));
    }
    public function eventList(Request $request)
    {
        // Search functionality
        $query = Event::query();
        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $events = $query->latest()->paginate(9); // Show 9 events per page

        // Fetch the latest 4 news for the sidebar
        $latestNews = News::latest()->take(4)->get();

        return view('front.newPage.event-list', compact('events', 'latestNews'));
    }
    public function eventDetails($id)
    {
        $event = Event::findOrFail($id);

        // Fetch the latest 4 events for the sidebar
        $latestEvents = Event::latest()->take(4)->get();

        return view('front.newPage.add.eventview-details', compact('event', 'latestEvents'));
    }




}

