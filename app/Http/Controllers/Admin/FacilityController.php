<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FacilityAchievement;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = FacilityAchievement::where('type', 'facility')->get();
        $achievements = FacilityAchievement::where('type', 'achievement')->get();
        return view('admin.setting.facility_achievement', compact('facilities', 'achievements'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'description' => 'required|string',
            'type' => 'required|in:facility,achievement'
        ]);

        $imagePath = $request->file('image')->store('uploads/facility_achievement', 'public');

        FacilityAchievement::create([
            'title' => $request->title,
            'image' => $imagePath,
            'description' => $request->description,
            'type' => $request->type
        ]);

        return redirect()->route('admin.facility_achievement.facility_achievement')->with('message', 'Data added successfully!');
    }

    public function update(Request $request)
{
    $request->validate([
        'title.*' => 'required|string|max:255',
        'image.*' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
        'description.*' => 'required|string',
        'type' => 'required|in:facility,achievement'
    ]);

    // Loop through each title, description, and image
    foreach ($request->title as $index => $title) {
        // Handle image upload if it exists
        $imagePath = null;

        // If there's an image, store it and get the path
        if ($request->hasFile('image.' . $index)) {
            $imagePath = $request->file('image.' . $index)->store('uploads/facility_achievement', 'public');
        } else {
            // If no image was uploaded, retain the existing image if it's available
            if (isset($request->existing_image[$index])) {
                $imagePath = $request->existing_image[$index];
            }
        }

        // Update or create a new record based on the type (facility or achievement)
        FacilityAchievement::updateOrCreate(
            [
                'id' => $request->input('id.' . $index),  // This should be passed from the form for each set
                'type' => $request->type,  // Type: 'facility' or 'achievement'
            ],
            [
                'title' => $title,
                'description' => $request->description[$index],
                'image' => $imagePath  // The image path (either new or old)
            ]
        );
    }

    return redirect()->route('admin.facility_achievement.facility_achievement')->with('message', ucfirst($request->type) . ' updated successfully!');
}
    public function destroy($id)
    {
        $item = FacilityAchievement::findOrFail($id);
        $item->delete();

        return redirect()->route('admin.facility_achievement.facility_achievement')->with('message', 'Data deleted successfully!');
    }
}
