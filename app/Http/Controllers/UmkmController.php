<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\RateUs;

class UmkmController extends Controller
{
    public function dashboard(Request $request)
    {
        // Fetch the category_id from the request
        $category_id = $request->query('category_id');
        
        // Get all categories for the filter dropdown
        $categories = Category::all();
        
        // Get events based on the category filter
        if ($category_id) {
            $events = Event::with('approvedRegistrations')->where('category_id', $category_id)->get();
        } else {
            $events = Event::with('approvedRegistrations')->get();
        }
    
        // Get the latest ratings
        $ratings = RateUs::latest()->get();
        
        // Return the view with the filtered events, ratings, and categories
        return view('umkm.dashboard', compact('events', 'ratings', 'categories'));
    }
    


    public function thanks()
    {
        return view('thanks');
    }
}
