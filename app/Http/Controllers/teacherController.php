<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;

class teacherController extends Controller
{
     public function index()
    {
        $teachers = Teacher::all();

        return view('admin.teacher.index', compact('teachers'));
    }
    public function add()
    {
        return view('admin.teacher.add');
    }
    public function save(Request $request)
    {
        $teacher  = new teacher();
        $teacher->image = $request->image->store('upload/product');
        $teacher->name = $request->name;
        $teacher->deg = $request->deg;
        $teacher->short_des = $request->short_des;
        $teacher->save();
        return redirect()->route("admin.teacher.list");
    }
    public function list(Request $request)
    {

        $teachers = Teacher::all();
        // dd($teachers);
        return view("admin.teacher.index" ,compact('teachers'));
    }
}
