<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('event.index', compact('events'));
    }

    public function create()
    {
        return view('event.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'required|image',
    ]);

    $imagePath = $request->file('image')->store('events', 'public');

    Event::create([
        'title' => $request->title,
        'description' => $request->description,
        'image' => $imagePath,
    ]);

    return redirect()->route('event.index');

}

public function edit($id)
{
    $event = Event::findOrFail($id);
    return view('event.edit', compact('event'));
}

public function update(Request $request, $id)
{
    $event = Event::findOrFail($id);

    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'nullable|image',
    ]);

    $event->title = $request->title;
    $event->description = $request->description;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('events', 'public');
        $event->image = $imagePath;
    }

    $event->save();

    return redirect()->route('event.index');
}

    public function delete($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('event.index');
    }
}
