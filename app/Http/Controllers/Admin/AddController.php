<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Add;

class AddController extends Controller
{
    public function index()
    {
        $adds = Add::whereIn('key', ['students', 'graduates', 'awards', 'faculties'])->get()->keyBy('key');
        return view('admin.add.index', compact('adds'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'students' => 'required|string|max:255',
            'graduates' => 'required|string|max:255',
            'awards' => 'required|string|max:255',
            'faculties' => 'required|string|max:255',
            'students_icon' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'graduates_icon' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'awards_icon' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'faculties_icon' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $keys = ['students', 'graduates', 'awards', 'faculties'];

        foreach ($keys as $key) {
            $add = Add::updateOrCreate(['key' => $key], ['value' => $request->$key]);

            if ($request->hasFile("{$key}_icon")) {
                $iconPath = $request->file("{$key}_icon")->store('icons');
                $add->update(['icon' => $iconPath]);
            }
        }

        return redirect()->back()->with('success', 'Data updated successfully!');
    }
}
