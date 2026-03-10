<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'email'   => 'required|email',
            'message' => 'required|min:10',
        ]);

        // Here you could store or email the message
        return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès!');
    }
}
