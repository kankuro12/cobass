<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Download;

class DownloadController extends Controller
{
    public function index()
    {
        $downloads = Download::all();
        return view('admin.downloads.index', compact('downloads'));
    }

    public function create()
    {
        return view('admin.downloads.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'file' => 'required|mimes:pdf,doc,docx,zip|max:2048',
    ]);

    // Check if file is uploaded
    if ($request->hasFile('file')) {
        $filePath = $request->file('file')->store('downloads', 'public'); // Save file in storage
    } else {
        return back()->with('error', 'File upload failed. Please try again.');
    }

    // Save to database
    $download = new \App\Models\Download();
    $download->title = $request->title;
    $download->description = $request->description;
    $download->file_path = $filePath;
    $download->save();

    return redirect()->route('admin.downloads.index')->with('success', 'Download added successfully!');
}


    public function destroy($id)
    {
        $download = Download::findOrFail($id);
        \Storage::disk('public')->delete($download->file_path);
        $download->delete();

        return redirect()->route('admin.downloads.index')->with('success', 'Download deleted successfully!');
    }
}
