<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testimonial;

class testimonialController extends Controller
{
    public function index()
    {
        $testimonials = testimonial::all();

        return view('admin.testimonial.index', compact('testimonials'));
    }
    public function add()
    {
        return view('admin.testimonial.add');
    }
    public function save(Request $request)
    {
        $testimonial = new testimonial();
        $testimonial->image =$request->image->store('upload/product');
        $testimonial->name = $request->name;
        $testimonial->profission = $request->profission;
        $testimonial->long_des = $request->long_des;
        $testimonial->save();
        return redirect()->back()->with('message', 'Successfully Added');
    }
    public function list(Request $request)
    {

        $testimonials = Testimonial::all();
        // dd($testimonials);
        return view("admin.testimonial.index" ,compact('testimonials'));
    }
    public function del(Request $request, testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->back()->with('message', 'Sucessfully Deleted');
    }
    public function edit(Request $request, testimonial $testimonial)
    {
        if ($request->getMethod() == "POST") {
            $testimonial->name = $request->name;
        $testimonial->profission = $request->profission;
        $testimonial->long_des = $request->long_des;
            if ($request->hasfile('image')) {
                $testimonial->image = $request->image->store('upload/testimonial');
            }
            $testimonial->save();
            return redirect()->back()->with('message', 'Successfully Added');
        } else {
            return view("admin.testimonial.edit",compact('testimonial'));
        }
    }
}
