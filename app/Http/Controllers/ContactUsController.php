<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsEmail;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::latest()->get();
        return view('contact-us.index', compact('contacts'));
    }

    public function create()
    {
        return view('contact-us.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contact = ContactUs::create($request->all());

        Mail::to('pekael2024@gmail.com')->send(new ContactUsEmail($contact));

        $user = Auth::user();
        if ($user && $user->hasRole('admin')) {
            return redirect()->route('lina.contact-us.index')->with('success', 'Message sent successfully.');
        } else {
            return redirect()->route('apa.thanks');
        }
    }

    public function destroy($id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->delete();

        return redirect()->route('lina.contact-us.index')
                         ->with('success', 'Message deleted successfully.');
    }


}
