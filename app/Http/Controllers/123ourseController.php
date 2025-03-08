<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{

    public function index()
    {
        $courses = DB::table('courses')->get();

        return view('admin.course.index', compact('courses'));
    }

    public function add()
    {
        return view("admin.course.add");
    }
    public function save(Request $request)
    {
            //  dd($request->all());
        $course = new course();
        $course->name = $request->name;
        $course->faculty = $request->faculty;
        $course->long_des = $request->long_des;
        $course->short_des = $request->short_des;
        $course->image = $request->image->store('upload/product');
        $course->save();
        // return redirect('')->with('message', 'Successfully Added');
        // return redirect()->route("admin.course.index");
        return redirect()->back()->with('message', 'Successfully Added');



    }
    public function list(Request $request)
    {

        $courses = Course::all();

        return view("admin.course.index" ,compact('courses'));
    }
    public function del(Request $request, course $course)
    {
        $course->delete();
        return redirect()->back()->with('message', 'Sucessfully Deleted');
    }
    public function edit(Request $request, course $course)
    {
        if ($request->getMethod() == "POST") {
            $course->name = $request->name;
            $course->faculty = $request->faculty;
            $course->long_des = $request->long_des;
            $course->short_des = $request->short_des;
            if ($request->hasfile('image')) {
                $course->image = $request->image->store('upload/course');
            }
            $course->save();
            return redirect()->back()->with('message', 'Successfully Added');
        } else {
            return view("admin.course.edit",compact('course'));
        }
    }
    public function showCoursesOnNewPage()
    {
        $courses = Course::all(); // Fetch all courses
        return view('newPage.index', compact('courses')); // Send to newPage/index.blade.php
    }

}
