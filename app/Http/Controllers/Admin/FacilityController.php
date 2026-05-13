<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::all()->keyBy('key');
        return view('admin.add.facility', compact('facilities'));
    }

    public function update(Request $request)
    {
        $facilities = ['facility1', 'facility2', 'facility3', 'facility4', 'facility5'];

        $rules = [];
        foreach ($facilities as $facility) {
            $rules["{$facility}_title"] = 'nullable|string|max:255';
            $rules["{$facility}_description"] = 'nullable|string';
            $rules["{$facility}_icon"] = 'nullable|file|mimes:jpeg,png,jpg,gif,svg,webp|max:2048';
        }

        $request->validate($rules);

        $uploadPath = 'uploads/facilities'; // Image storage folder

        foreach ($facilities as $facility) {
            $facilityData = Facility::updateOrCreate(
                ['key' => $facility],
                [
                    'title' => $request->input("{$facility}_title")??'',
                    'description' => $request->input("{$facility}_description")??'',
                ]
            );

            if ($request->hasFile("{$facility}_icon")) {
                $file = $request->file("{$facility}_icon");
                $filename = time() . '_' . $file->getClientOriginalName();

                // Ensure directory exists
                if (!File::exists(public_path($uploadPath))) {
                    File::makeDirectory(public_path($uploadPath), 0755, true, true);
                }

                // Move new file
                $file->move(public_path($uploadPath), $filename);
                $newImagePath = asset($uploadPath . '/' . $filename);

                // Delete old image if it exists
                if (!empty($facilityData->icon) && File::exists(public_path($facilityData->icon))) {
                    File::delete(public_path($facilityData->icon));
                }

                // Save new image path
                $facilityData->update(['icon' => $newImagePath]);
            }
        }
        Cache::forget('four_facilities');
        Cache::forget('home_facilities');
        Cache::forget('about_facilities');

        return redirect()->route('admin.add.facility')->with('success', 'Facilities updated successfully.');
    }
}
