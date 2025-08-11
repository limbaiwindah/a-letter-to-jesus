<?php

namespace App\Http\Controllers;

use App\Models\Letter;

use Illuminate\Http\Request;

class LetterController extends Controller
{

    public function store(Request $request) {
        // validate input
        $validated = $request->validate([
            'content' => 'required|string|max:5000',
            'sender' => 'nullable|string|max:255',
        ]);

        // Save the letter and assign it to $letter
        $letter = Letter::create([
            'content' => $validated['content'],
            'sender' => $validated['sender'] ?? null,
        ]);

        return redirect()->route('after-letter-msg', ['id' => $letter->id]);
    }

    public function create() {
        return view('write-letter'); // tells Laravel to load the Blade view from resources/views/write-letter.blade.php
    }

    public function afterLetterMsg($id) {
        $letter = Letter::findOrFail($id);
        return view('after-letter-msg', compact('letter'));
    }

    public function index() {
        $letters = Letter::all();  // fetch all saved letters
        return view('letters-list', compact('letters'));  // send letters to a new blade view
    }



}
