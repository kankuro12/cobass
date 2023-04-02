<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class courseController extends Controller
{

    public function index()
    {
        $courses = Course::all();

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
        return redirect()->route("admin.course.list");


    }
    public function list(Request $request)
    {

        $courses = Course::all();
        // return view('list', compact('contacts'));
        // dd($courses);
        return view("admin.course.index" ,compact('courses'));
    }
}
