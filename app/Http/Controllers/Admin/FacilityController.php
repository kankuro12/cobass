<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::all()->keyBy('key');
        return view('admin.add.facility', compact('facilities'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'facility1_title' => 'required|string|max:255',
            'facility1_description' => 'required|string',
            'facility1_icon' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facility2_title' => 'required|string|max:255',
            'facility2_description' => 'required|string',
            'facility2_icon' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facility3_title' => 'required|string|max:255',
            'facility3_description' => 'required|string',
            'facility3_icon' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facility4_title' => 'required|string|max:255',
            'facility4_description' => 'required|string',
            'facility4_icon' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $facilities = ['facility1', 'facility2', 'facility3', 'facility4'];

        foreach ($facilities as $facility) {
            $facilityData = Facility::updateOrCreate(
                ['key' => $facility],
                [
                    'title' => $request->input("{$facility}_title"),
                    'description' => $request->input("{$facility}_description"),
                ]
            );

            if ($request->hasFile("{$facility}_icon")) {
                $file = $request->file("{$facility}_icon");
                $path = $file->store('facilities', 'public');
                $facilityData->update(['icon' => $path]);
            }
        }

        return redirect()->route('admin.add.facility')->with('success', 'Facilities updated successfully.');
    }
}
