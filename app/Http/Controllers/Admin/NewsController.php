<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'feature_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'short_content' => 'required|string|max:500',
            'extra_content' => 'required',
        ]);

        // Upload feature image
        $path = $request->file('feature_image')->store('uploads/news');

        News::create([
            'title' => $request->title,
            'feature_image' => $path,
            'short_content' => $request->short_content,
            'extra_content' => $request->extra_content,
        ]);

        return redirect()->route('admin.news.index')->with('success', 'News added successfully!');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'feature_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'short_content' => 'required|string|max:500',
            'extra_content' => 'required',
        ]);

        if ($request->hasFile('feature_image')) {
            $path = $request->file('feature_image')->store('uploads/news');
            $news->feature_image = $path;
        }

        $news->update([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'extra_content' => $request->extra_content,
        ]);

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully!');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully!');
    }
}
