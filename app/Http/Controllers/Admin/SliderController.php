<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    public function index()
    {

        $sliders = DB::table('sliders')->get();
        return view('admin.setting.slider.index', compact('sliders'));
    }

    public function add(Request $request)
    {
        if ($request->getMethod() == "POST") {
            $slider = new Slider();
            $slider->title = $request->title ?? '';
            $slider->subtitle = $request->subtitle ?? '';
            $slider->link_title = $request->link_title ?? '';

            $slider->image = $request->image->store('uploads/sliders');
            if ($request->hasFile('mobile_image')) {
                $slider->mobile_image = $request->mobile_image->store('uploads/sliders');

            } else {
                $slider->mobile_image = $slider->image;

            }
            $slider->link = $request->link;

            $slider->save();
            $this->render();
            return redirect()->back()->with('message', 'Slider Added');
            // dd($request->all(),$slider);
        } else {
            $pages = DB::table('pages')->select('id', 'type', 'title')->get();

            return view('admin.setting.slider.add', compact('pages'));

        }
    }

    public function del(Request $request, Slider $slider)
    {
        $slider->delete();
        $this->render();

        return redirect()->back()->with('message', 'Slider Deleted');

    }
    public function edit(Request $request, Slider $slider)
    {
        if ($request->getMethod() == "POST") {
            $slider->title = $request->title;
            $slider->subtitle = $request->subtitle;
            if ($request->hasFile('mobile_image')) {
                $slider->mobile_image = $request->mobile_image->store('uploads/sliders');

            }
            if ($request->hasFile('image')) {
                $slider->image = $request->image->store('uploads/sliders');

            }
            $slider->link_title = $request->link_title ?? '';
            $slider->link = $request->link ?? '';

            $slider->save();
            $this->render();
            return redirect()->back()->with('message', 'Slider Updated');
            // dd($request->all(),$slider);
        } else {
            $pages = DB::table('pages')->select('id', 'type', 'title')->get();
            return view('admin.setting.slider.edit', compact('pages', 'slider'));

        }
    }

    private function render()
    {
        Cache::forget('home_slider');
    //     $sliders = DB::table('sliders')->get();
    //     file_put_contents(resource_path('views/front/home/slider.blade.php'), view('admin.setting.slider.template', compact('sliders'))->render());
    }
}
