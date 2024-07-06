<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RateUs;
use Illuminate\Support\Facades\Auth;

class RateUsController extends Controller
{
    public function index()
    {
        $ratings = RateUs::latest()->get();
        return view('rate-us.index', compact('ratings'));
    }

    public function create()
    {
        return view('rate-us.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'rating' => 'required|integer|between:1,5',
            'message' => 'nullable',
        ]);

        $rate = RateUs::create($request->all());

        $user = Auth::user();
        if ($user && $user->hasRole('admin')) {
            return redirect()->route('rate.index')->with('success', 'Rating submitted successfully.');
        } else {
            return redirect()->route('apa.thanks');
        }
    }

    public function delete($id)
    {
        $rate = RateUs::findOrFail($id);
        $rate->delete();

        return redirect()->route('rate.index')->with('success', 'Rating deleted successfully.');
    }
}
