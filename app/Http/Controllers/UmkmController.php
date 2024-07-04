<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\RateUs;

class UmkmController extends Controller
{
    public function dashboard()
    {
        $events = Event::with('approvedRegistrations')->get();
        $ratings = RateUs::latest()->get();
        return view('umkm.dashboard', compact('events', 'ratings'));
    }

    public function thanks()
    {
        return view('thanks');
    }
}
