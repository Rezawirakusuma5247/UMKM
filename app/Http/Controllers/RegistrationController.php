<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{

    public function index()
    {
        // Fetch all registrations with their associated event details
        $registrations = Registration::with('event')->get();
        return view('registration.index', compact('registrations'));
    }

    public function form_r($id)
    {
        // Show registration form for a specific event
        $event = Event::findOrFail($id);
        return view('registration.form-registrasi', compact('event'));
    }

    public function store_r(Request $request)
    {
        // Validate incoming registration data
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'name' => 'required',
            'umkm' => 'required',
            'number' => 'required',
        ]);

        // Create new registration
        Registration::create($request->all());

        // Check if the user is an admin and redirect accordingly
        $user = Auth::user();
        if ($user && $user->hasRole('admin')) {
            return redirect()->route('regis.regis.index')->with('success', 'Registration created successfully.');
        } else {
            return redirect()->route('apa.thanks')->with('success', 'Thank you for your registration.');
        }
    }

    public function approve($id)
    {
        // Approve a registration by setting 'approved' to true
        $registration = Registration::findOrFail($id);
        $registration->approved = true;
        $registration->save();

        return redirect()->route('regis.regis.list')->with('success', 'Registration approved successfully.');
    }

    public function list()
{
    // Retrieve approved registrations with their associated event details
    $registrations = Registration::where('approved', true)->with('event')->get();

    // Pass the data to the 'registration.list-event' view
    return view('registration.list-event', compact('registrations'));
}



    public function delete(Request $request, $id)
    {
        // Delete a registration
        $registration = Registration::find($id);
        if ($registration) {
            $registration->delete();
        }
        return redirect()->route('regis.regis.index')->with('success', 'Registration deleted successfully.');
    }
}

