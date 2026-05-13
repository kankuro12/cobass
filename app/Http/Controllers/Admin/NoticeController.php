<?php

namespace App\Http\Controllers\Admin;
use App\Models\Notice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class NoticeController extends Controller
{
    private function storeAttachment(Request $request): ?string
    {
        if (! $request->hasFile('file')) {
            return null;
        }

        $uploadPath = 'uploads/notices';
        $file = $request->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();

        if (! File::exists(public_path($uploadPath))) {
            File::makeDirectory(public_path($uploadPath), 0755, true, true);
        }

        $file->move(public_path($uploadPath), $filename);

        return $uploadPath . '/' . $filename;
    }

    private function deleteAttachment(?string $path): void
    {
        if (empty($path)) {
            return;
        }

        $fullPath = public_path($path);

        if (File::exists($fullPath)) {
            File::delete($fullPath);
        }
    }

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
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'details' => 'required|string',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp,pdf,doc,docx,xls,xlsx|max:5120',
            'external_link_text' => 'nullable|string|max:255',
            'external_link' => 'nullable|url|max:2048',
        ]);

        $attachmentPath = $this->storeAttachment($request);

        Notice::create([
            'title' => $request->title,
            'date' => $request->date,
            'details' => $request->details,
            'link' => $attachmentPath,
            'external_link_text' => filled(trim((string) $request->external_link_text)) ? $request->external_link_text : null,
            'external_link' => filled(trim((string) $request->external_link)) ? $request->external_link : null,
        ]);
        Cache::forget('all_notices');
        Cache::forget('noticepage');
        Cache::forget('home_notices');

        return redirect()->route('admin.notice.index')->with('message', 'Notice added successfully!');
    }
    public function edit($id)
    {
        $notice = Notice::findOrFail($id);
        return view('admin.notice.update', compact('notice'));
    }

    // Update the notice in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'details' => 'required|string',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp,pdf,doc,docx,xls,xlsx|max:5120',
            'external_link_text' => 'nullable|string|max:255',
            'external_link' => 'nullable|url|max:2048',
        ]);

        $notice = Notice::findOrFail($id);

        if ($request->hasFile('file')) {
            $this->deleteAttachment($notice->link);
            $notice->link = $this->storeAttachment($request);
        }

        $notice->update([
            'title' => $request->title,
            'date' => $request->date,
            'details' => $request->details,
            'link' => $notice->link,
            'external_link_text' => filled(trim((string) $request->external_link_text)) ? $request->external_link_text : null,
            'external_link' => filled(trim((string) $request->external_link)) ? $request->external_link : null,
        ]);
        Cache::forget('all_notices');
        Cache::forget('noticepage');
        Cache::forget('home_notices');

        return redirect()->route('admin.notice.index')->with('success', 'Notice updated successfully.');
    }
    // Delete a notice from the database
    public function destroy($id)
    {
        $notice = Notice::findOrFail($id);

        $this->deleteAttachment($notice->link);

        $notice->delete();
        Cache::forget('all_notices');
        Cache::forget('noticepage');

        return redirect()->route('admin.notice.index')->with('success', 'Notice deleted successfully.');
    }
}
