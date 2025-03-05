<?php

namespace App\Http\Controllers\Admin;
use App\Models\Notice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    // Show all notices
    public function index()
    {
        $notices = Notice::all(); // Get all notices
        return view('admin.notice.index', compact('notices'));
    }

    // Show the form to create a new notice
    public function create()
    {
        return view('admin.notice.add');
    }

    // Store a new notice in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required|date',
            'details' => 'required',
            'link' => 'nullable|url',
        ]);

        // Store the notice in the database
        Notice::create($request->all());

        return redirect()->route('admin.notice.index')->with('success', 'Notice created successfully.');
    }

    // Show the form to edit an existing notice
    public function edit($id)
    {
        $notice = Notice::findOrFail($id);
        return view('admin.notice.update', compact('notice'));
    }

    // Update the notice in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required|date',
            'details' => 'required',
            'link' => 'nullable|url',
        ]);

        $notice = Notice::findOrFail($id);
        $notice->update($request->all());

        return redirect()->route('admin.notice.index')->with('success', 'Notice updated successfully.');
    }

    // Delete a notice from the database
    public function destroy($id)
    {
        $notice = Notice::findOrFail($id);
        $notice->delete();

        return redirect()->route('admin.notice.index')->with('success', 'Notice deleted successfully.');
    }
}
