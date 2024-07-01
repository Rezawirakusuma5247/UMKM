<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function welcome()
    {
        $events = Event::with('approvedRegistrations')->get();
        return view('umkm.welcome', compact('events'));
    }

    public function thanks()
    {
        return view('thanks');
    }
}
