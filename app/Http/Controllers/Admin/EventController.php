<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'venue' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'short_description' => 'required|string|max:500',
            'long_description' => 'required|string',
            'feature_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload feature image
        $path = $request->file('feature_image')->store('uploads/events', 'public');

        // Store the event in the database
        Event::create([
            'title' => $request->title,
            'venue' => $request->venue,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'feature_image' => 'storage/' . $path,
        ]);

        return redirect()->route('admin.events.index')->with('success', 'Event created successfully!');
    }
    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'venue' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'short_description' => 'required|string|max:500',
            'long_description' => 'required|string',
            'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update feature image if a new one is uploaded
        if ($request->hasFile('feature_image')) {
            // Delete the old image if it exists
            if ($event->feature_image) {
                Storage::delete('public/' . str_replace('storage/', '', $event->feature_image));
            }

            // Upload the new feature image
            $path = $request->file('feature_image')->store('uploads/events', 'public');
            $event->feature_image = 'storage/' . $path;
        }

        // Update the other event fields
        $event->update([
            'title' => $request->title,
            'venue' => $request->venue,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
        ]);

        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully!');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully!');
    }
}
