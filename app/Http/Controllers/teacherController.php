<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
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
        return redirect()->back()->with('message', 'Successfully Added');
        // return redirect()->route("admin.teacher.index");
    }
    public function list(Request $request)
    {

        $teachers = DB::table('teachers')->get();
        // dd($teachers);
        return view("admin.teacher.index" ,compact('teachers'));
    }
    public function del(Request $request, teacher $teacher)
    {
        $teacher->delete();
        return redirect()->back()->with('message', 'Sucessfully Deleted');
    }
    public function edit(Request $request, teacher $teacher)
    {
        if ($request->getMethod() == "POST") {
            $teacher->name = $request->name;
            $teacher->deg = $request->deg;
        $teacher->short_des = $request->short_des;
            if ($request->hasfile('image')) {
                $teacher->image = $request->image->store('upload/teacher');
            }
            $teacher->save();
            return redirect()->back()->with('message', 'Successfully Added');
        } else {
            return view("admin.teacher.edit",compact('teacher'));
        }
    }
}
