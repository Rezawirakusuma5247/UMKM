<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Category;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('event.index', compact('events'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('event.create', compact('categories'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'category_id' => 'required|exists:categories,id',
        ]);
    
        $imagePath = $request->file('image')->store('events', 'public');
    
        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'category_id' => $request->category_id,
        ]);
    
        return redirect()->route('event.index');
    }
    
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $categories = Category::all();
        return view('event.edit', compact('event', 'categories'));
    }
    
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
    
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
            'category_id' => 'required|exists:categories,id',
        ]);
    
        $event->title = $request->title;
        $event->description = $request->description;
        $event->category_id = $request->category_id;
    
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
