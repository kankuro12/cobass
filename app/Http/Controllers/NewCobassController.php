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
use DB;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Download;
use App\Models\Event;
use App\Models\News;
use App\Models\Notice;
use App\Models\Add;
use App\Models\Facility;
use App\Models\Achievement;
use Illuminate\Support\Facades\Cache;
use function PHPUnit\Framework\callback;
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
        $achievementData = Cache::rememberForever('achievement_data', function () use ($achievements) {
            return $achievements->keyBy('key'); // Transform and cache
        });

        $sliders = Cache::rememberForever('home_slider', function () {

            return DB::table(Slider::tableName)->get();
        });
        // Fetch courses and pass to the view
        $courses = Cache::rememberForever('home_course', function () {
            return DB::table(Course::tableName)->orderBy('id', 'desc')->take(4)->get();
        });
        //fetch teacher information
        $teachers = Cache::rememberForever('home_teacher', function () {
            return DB::table(Teacher::tableName)->orderBy('id', 'desc')->take(4)->get();  // Use the constant without parentheses
        });

        $events = Cache::rememberForever('home_events', function () {
            return DB::table(Event::tableName)->orderBy('id', 'desc')->take(4)->get();
        });
        $news = Cache::rememberForever('home_news', function () {
            return DB::table(News::tableName)->orderBy('id', 'desc')->take(4)->get();
        });
        $testimonials = Cache::rememberForever('home_testimonial', function () {
            return DB::table(Testimonial::tableName)->get();
        });
        $popups = Popup::where('active', 1)->get(); // Get the first active popup
        $data = $this->getHomepageData();

        // Fetch the facilities data, assuming these are the 4 facilities
        $facility = Cache::rememberForever('home_facilities', function () {
            return DB::table('facilities')->get();
        });

        $achieve = Cache::rememberForever('home_achieve', function () {
            return DB::table('achievements')->orderBy('id', 'desc')->take(4)->get();
        });
        return view('front.newPage.index', compact('sliders', 'courses', 'teachers', 'testimonials', 'popups', 'events', 'news', 'data', 'achievementData', 'facility', 'achieve'));
    }

    public function event()
    {
        $events = Cache::rememberForever('event', function () {
            return DB::table(Course::tableName)->get();
        });
        return view('front.newPage.event');
    }

    public function notice()
{
    $notices = Cache::rememberForever('noticepage', function () {
        return Notice::orderBy('id', 'desc')->get();  // Orders by 'created_at' in descending order
    });


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
        $galleryTypes = Cache::rememberForever('gallery_types', function () {
            return GalleryType::with('galleries')->get();
        });

        return view('front.newPage.gallery', compact('galleryTypes'));
    }

    // Show images inside a selected album
    public function galleryImages($id)
    {
        $galleryType = GalleryType::with('galleries')->findOrFail($id);
        return view('front.newPage.gallery_images', compact('galleryType'));
    }

    public function showNotices()
    {
        $notices = Cache::rememberForever('all_notices', function () {
            return DB::table('notices')->orderBy('id', 'desc')->get();
        });

        return view('front.newPage.notice', compact('notices'));
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
        // Cache the current course with ID in the cache key
        $course = Cache::rememberForever("course_{$id}", function () use ($id) {
            return DB::table('courses')->where('id', $id)->first();
        });

        // Cache other courses with ID in the cache key
        $otherCourses = Cache::rememberForever("other_courses_except_{$id}", function () use ($id) {
            return DB::table('courses')->where('id', '!=', $id)->orderBy('created_at', 'desc')->get();
        });

        // Return the view with cached data
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
        // Cache the facilities data
        $facilities = Cache::rememberForever('four_facilities', function () {
            return DB::table('facilities')
                ->whereIn('id', [1, 2, 3, 4])  // Get facilities with IDs 1, 2, 3, and 4
                ->get();
        });

        // Assign each facility to its respective variable
        $facility1 = $facilities->firstWhere('id', 1);
        $facility2 = $facilities->firstWhere('id', 2);
        $facility3 = $facilities->firstWhere('id', 3);
        $facility4 = $facilities->firstWhere('id', 4);

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
    }
    public function newsList(Request $request)
    {
        // Build the query
        $query = News::latest(); // Latest news first

        // If search is present, filter results
        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // Get paginated results without caching
        $news = $query->paginate(9); // Show 9 news per page

        return view('front.newPage.news-list', compact('news'));
    }

    public function eventList(Request $request)
{
    $query = Event::query();

    if ($request->has('search')) {
        $query->where('title', 'like', '%' . $request->search . '%');
    }

    $events = $query->latest()->paginate(9); // Show 9 events per page

    return view('front.newPage.event-list', compact('events'));
}
    // public function eventList(Request $request)
    // {

    //     $query = Event::query();

    //     if ($request->has('search')) {
    //         $query->where('title', 'like', '%' . $request->search . '%');
    //     }

    //     // Cache the event list with the search query and pagination
    //     $events = Cache::rememberForever('event_lists' . md5($request->fullUrl()), function () use ($query) {
    //         return $query->latest()->paginate(9); // Show 9 events per page
    //     });

    //     return view('front.newPage.event-list', compact('events'));
    // }
    public function eventDetails($id)
    {
        $event = Event::findOrFail($id);

        // Fetch the latest 4 events for the sidebar
        $latestEvents = Event::latest()->take(4)->get();

        return view('front.newPage.add.eventview-details', compact('event', 'latestEvents'));
    }
    public function about()
    {
        $achievements = Add::whereIn('key', ['students', 'graduates', 'awards', 'faculties'])->get();

        // Map data to an array with keys like 'students', 'graduates', etc.
        $achievementData = $achievements->keyBy('key');

        // Fetch homepage data if necessary (like index method)
        $data = $this->getHomepageData();
        $facility = Facility::all();
        $teachers = teacher::all();
        $testimonials = Testimonial::all();

        return view('front.newPage.about', compact('data', 'facility', 'teachers', 'testimonials', 'achievementData'));
    }
    public function teacherList(Request $request)
    {
        $search = $request->search;

        // Use Cache to store teacher list
        $teachers = Cache::rememberForever("f", function () use ($search) {
            $query = Teacher::query();

            if (!empty($search)) {
                $query->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('deg', 'LIKE', "%{$search}%")
                    ->orWhere('short_des', 'LIKE', "%{$search}%");
            }

            return $query->orderBy('name')->paginate(10);
        });

        return view('front.newPage.teacherlist', compact('teachers'));
    }

}





