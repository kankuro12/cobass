<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Support\Facades\Cache;
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
            $slider->link = $request->link ?? '';

            // Video support
            $slider->is_video = $request->has('is_video') ? 1 : 0;
            $slider->video_url = $request->video_url ?? '';

            // Always require image (for both image and video thumbnails)
            if ($request->hasFile('image')) {
                $slider->image = $request->image->store('uploads/sliders');
            }

            if ($request->hasFile('mobile_image')) {
                $slider->mobile_image = $request->mobile_image->store('uploads/sliders');
            } else {
                $slider->mobile_image = $slider->image;
            }

            $slider->save();
            $this->render();

            return redirect()->back()->with('message', 'Slider Added');
        } else {
            $pages = DB::table('pages')->select('id', 'type', 'title')->get();
            return view('admin.setting.slider.add', compact('pages'));
        }
    }

    public function edit(Request $request, Slider $slider)
    {
        if ($request->getMethod() == "POST") {
            $slider->title = $request->title ?? '';
            $slider->subtitle = $request->subtitle ?? '';
            $slider->link_title = $request->link_title ?? '';
            $slider->link = $request->link ?? '';

            // Video support
            $slider->is_video = $request->has('is_video') ? 1 : 0;
            $slider->video_url = $request->video_url ?? '';

            if ($request->hasFile('image')) {
                $slider->image = $request->image->store('uploads/sliders');
            }

            if ($request->hasFile('mobile_image')) {
                $slider->mobile_image = $request->mobile_image->store('uploads/sliders');
            }

            $slider->save();
            $this->render();

            return redirect()->back()->with('message', 'Slider Updated');
        } else {
            $pages = DB::table('pages')->select('id', 'type', 'title')->get();
            return view('admin.setting.slider.edit', compact('pages', 'slider'));
        }
    }

    public function del(Request $request, Slider $slider)
    {
        $slider->delete();
        $this->render();

        return redirect()->back()->with('message', 'Slider Deleted');
    }

    private function render()
    {
        Cache::forget('home_slider');
    }
}
