<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PopupController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\AchievementController;
use App\Http\Controllers\Admin\DownloadController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\RegistrationController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\coursesController;
// use App\Http\Controllers\teacherController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\cobassController;
use App\Http\Controllers\NewCobassController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AchievementviewController;
use App\Http\Controllers\testimonialController;
use App\Http\Controllers\teacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AddController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/', [cobassController::class, 'index'])->name('index');
// Route::get('about', [cobassController::class, 'about'])->name('about');
// Route::get('course', [cobassController::class, 'course'])->name('course');
// Route::get('contact', [cobassController::class, 'contact'])->name('contact');
// Route::get('team', [cobassController::class, 'team'])->name('team');
// Route::get('testimonial', [cobassController::class, 'testimonial'])->name('testimonial');
// Route::get('error', [cobassController::class, 'error'])->name('error');

Route::get('', [NewCobassController::class, 'index'])->name('index');
Route::get('event', [NewCobassController::class, 'event'])->name('event');
Route::get('notice', [NewCobassController::class, 'notice'])->name('notice');
// Route for courses listing
Route::get('course', [NewCobassController::class, 'course'])->name('course');
Route::get('/course/{id}', [NewCobassController::class, 'showCourse'])->name('course.show');
Route::get('courseDetail', [NewCobassController::class, 'courseDetail'])->name('courseDetail');
//notice route
Route::get('/notices', [NewCobassController::class, 'showNotices'])->name('notices.show');
//downloads route
Route::get('/downloads', [NewCobassController::class, 'showDownloads'])->name('downloads');
Route::get('gallery', [NewCobassController::class, 'gallery'])->name('gallery');
Route::get('about', [NewCobassController::class, 'about'])->name('about');
Route::get('contact', [NewCobassController::class, 'contact'])->name('contact');
//Route::get('/new-page', [courseController::class, 'showCoursesOnNewPage'])->name('newPage.index');
//contact submission bug
Route::post('/contact-submit', [NewCobassController::class, 'submitContact'])->name('contact.submit');
//gallery view nikalna khojeko
Route::get('/gallery', [NewCobassController::class, 'gallery'])->name('gallery');
Route::get('/gallery/{id}', [NewCobassController::class, 'galleryImages'])->name('gallery.show');
// Frontend Achievements Route
Route::get('/achievements', [AchievementviewController::class, 'index'])->name('achievements');
// Show the registration form
Route::get('register', [RegisterController::class, 'showForm'])->name('register.form');
// Show the news page
Route::get('/news', [NewCobassController::class, 'showNews'])->name('news');
Route::get('/news/{id}', [NewCobassController::class, 'showNews'])->name('news.details');

// Handle form submission
Route::post('register', [RegisterController::class, 'submitForm'])->name('register.submit');
Route::get('/events', [NewCobassController::class, 'showEvents'])->name('events');
Route::get('/facilities', [NewCobassController::class, 'showFacilities']);
//Handle the event details route
Route::get('/events', [NewCobassController::class, 'listEvents'])->name('events.index'); // List all events
Route::get('/events/{id}', [NewCobassController::class, 'showEvent'])->name('events.details'); // View event details


//Route::get('/course/{slug}', [CourseController::class, 'show'])->name('course.show');


Route::prefix("admin")->name("admin.")->group(function () {
    Route::post('setting/gallery/delete', [GalleryController::class, 'deleteImage'])->name('setting.gallery.delete');
    Route::match(["POST", "GET"], 'login', [AuthController::class, 'login'])->name('login');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    //Download Route
    Route::resource('downloads', DownloadController::class)->except(['show', 'edit', 'update']);
    Route::match(["POST", "GET"], 'logout', function () {
        // Auth::logout();
    });


    // Route::prefix('page')->name('page.')->group(function () {
    //     Route::get('@{type}', [PageController::class, 'index'])->name('index');
    //     Route::match(['get', 'post'], 'add/@{type}', [PageController::class, 'add'])->name('add');
    //     Route::match(['get', 'post'], 'edit/{page}', [PageController::class, 'edit'])->name('edit');
    //     Route::match(['get', 'post'], 'del/{page}', [PageController::class, 'del'])->name('del');
    //     Route::match(['get', 'post'], 'delDoc', [PageController::class, 'delDoc'])->name('delDoc');
    // });
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('', [ProductController::class, 'index'])->name('index');
        Route::match(["GET", "POST"], 'add', [ProductController::class, 'add'])->name('add');
        Route::match(["GET", "POST"], 'edit/{product}', [ProductController::class, 'edit'])->name('edit');
        Route::match(["GET", "POST"], 'del/{product}', [ProductController::class, 'del'])->name('del');
    });
    Route::middleware('auth')->group(function () {
        Route::prefix('notice')->name('notice.')->group(function () {
            Route::get('', [NoticeController::class, 'index'])->name('index');
            Route::get('create', [NoticeController::class, 'create'])->name('create');
            Route::post('store', [NoticeController::class, 'store'])->name('store');
            Route::get('edit/{id}', [NoticeController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [NoticeController::class, 'update'])->name('update');
            Route::delete('delete/{id}', [NoticeController::class, 'destroy'])->name('destroy');
        });
    });
    //add controller
    Route::get('/add', [AddController::class, 'index'])->name('add.index');
    Route::put('/add/update', [AddController::class, 'update'])->name('add.update');
    Route::get('registrations', [RegistrationController::class, 'index'])->name('registration.index');
    Route::delete('registrations/{id}', [RegistrationController::class, 'destroy'])->name('registration.destroy');
    Route::get('/add/facility', [FacilityController::class, 'index'])->name('add.facility');
    Route::put('add/facility/update', [FacilityController::class, 'update'])->name('add.facility.update');



    // Admin Achievements Route
    Route::resource('achievements', AchievementController::class);
    Route::prefix('admin')->name('admin.')->group(function () {
        // Other routes

    });
    // Route::prefix('facility_achievement')->name('facility_achievement.')->group(function () {
    //     Route::get('/', [FacilityController::class, 'index'])->name('facilityAchievement.index');
    //     Route::post('/store', [FacilityController::class, 'store'])->name('facilityAchievement.store');

    //     // Ensure the update route is correctly defined
    //     Route::put('/update/{id}', [FacilityController::class, 'update'])->name('facilityAchievement.update');

    //     Route::delete('/delete/{id}', [FacilityController::class, 'destroy'])->name('facilityAchievement.destroy');
    // });



    Route::prefix('course')->name('course.')->group(function () {
        Route::get('/', [courseController::class, 'index'])->name('index');
        Route::match(['get', 'post'], 'add', [courseController::class, 'add'])->name('add');
        Route::post('save', [courseController::class, 'save'])->name('save');
        Route::match(['GET', 'POST'], 'edit/{course}', [courseController::class, 'edit'])->name('edit');
        Route::match(['GET', 'POST'], 'del/{course}', [courseController::class, 'del'])->name('del');
        // Route::get('list', [courseController::class, 'list'])->name('list');
    });

    Route::prefix('teacher')->name('teacher.')->group(function () {
        Route::get('/', [teacherController::class, 'index'])->name('index');
        Route::match(['get', 'post'], 'add', [teacherController::class, 'add'])->name('add');
        Route::post('save', [teacherController::class, 'save'])->name('save');
        // Route::get('list', [teacherController::class, 'list'])->name('list');
        Route::match(['GET', 'POST'], 'edit/{teacher}', [teacherController::class, 'edit'])->name('edit');
        Route::match(['GET', 'POST'], 'del/{teacher}', [teacherController::class, 'del'])->name('del');
    });
    Route::prefix('testimonial')->name('testimonial.')->group(function () {
        Route::get('/', [testimonialController::class, 'index'])->name('index');
        Route::match(['get', 'post'], 'add', [testimonialController::class, 'add'])->name('add');
        Route::post('save', [testimonialController::class, 'save'])->name('save');
        Route::match(['GET', 'POST'], 'edit/{testimonial}', [testimonialController::class, 'edit'])->name('edit');
        Route::match(['GET', 'POST'], 'del/{testimonial}', [testimonialController::class, 'del'])->name('del');
        // Route::get('list', [testimonialController::class, 'list'])->name('list');
    });
    // News and Events routes
    Route::resource('news', NewsController::class);
    // Route::resource('events', EventController::class);



    Route::prefix('event')->name('event.')->group(function () {
        Route::get('', [EventController::class, 'index'])->name('index');
        Route::match(['get', 'post'], 'add/', [EventController::class, 'add'])->name('add');
        Route::match(['get', 'post'], 'edit/{event}', [EventController::class, 'edit'])->name('edit');
        Route::match(['get', 'post'], 'del/{event}', [EventController::class, 'del'])->name('del');
    });
    Route::prefix('setting')->name('setting.')->group(function () {

        Route::match(['GET', 'POST'], '@{type}', [SettingController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], '/homepage', [SettingController::class, 'homepage'])->name('homepage');
        Route::match(['GET', 'POST'], '/contact', [SettingController::class, 'contact'])->name('contact');
        Route::match(['GET', 'POST'], '/meta', [SettingController::class, 'meta'])->name('meta');

        Route::prefix('slider')->name('slider.')->group(function () {
            Route::get('', [SliderController::class, 'index'])->name('index');
            Route::match(['get', 'post'], 'add', [SliderController::class, 'add'])->name('add');
            Route::match(['get', 'post'], 'edit/{slider}', [SliderController::class, 'edit'])->name('edit');
            Route::match(['get', 'post'], 'del/{slider}', [SliderController::class, 'del'])->name('del');
        });
        Route::prefix('popup')->name('popup.')->group(function () {
            Route::get('', [PopupController::class, 'index'])->name('index');
            Route::match(['get', 'post'], 'add', [PopupController::class, 'add'])->name('add');
            Route::match(['get', 'post'], 'edit/{popup}', [PopupController::class, 'edit'])->name('edit');
            Route::match(['get', 'post'], 'del/{popup}', [PopupController::class, 'del'])->name('del');
            Route::match(['get', 'post'], 'status/{popup}/{status}', [PopupController::class, 'status'])->name('status');
        });

        Route::prefix('gallery')->name('gallery.')->group(function () {
            Route::prefix('type')->name('type.')->group(function () {
                Route::get('', [GalleryController::class, 'indexType'])->name('index');
                Route::match(['get', 'post'], 'add', [GalleryController::class, 'addType'])->name('add');
                Route::match(['get', 'post'], 'edit/{type}', [GalleryController::class, 'editType'])->name('edit');
                Route::match(['get', 'post'], 'del/{type}', [GalleryController::class, 'delType'])->name('del');
            });

            Route::get('manage/{type}', [GalleryController::class, 'index'])->name('index');
            Route::match(['get', 'post'], 'add', [GalleryController::class, 'add'])->name('add');
            Route::match(['get', 'post'], 'edit/{gallery}', [GalleryController::class, 'edit'])->name('edit');
            Route::match(['get', 'post'], 'del/{gallery}', [GalleryController::class, 'del'])->name('del');
        });
    });
    Route::prefix('faq')->name('faq.')->group(function () {
        Route::get('', [FaqController::class, 'index'])->name('index');
        Route::match(['get', 'post'], 'add', [FaqController::class, 'add'])->name('add');
        Route::match(['get', 'post'], 'edit/{faq}', [FaqController::class, 'edit'])->name('edit');
        Route::match(['get', 'post'], 'del/{faq}', [FaqController::class, 'del'])->name('del');
    });
});
//   Route::get('/admin/news', [NewsController::class, 'index'])->name('admin.news.index');
