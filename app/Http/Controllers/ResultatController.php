<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;

class ResultatController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $eleves = Eleve::when($search, function ($query, $search) {
            return $query->where('nom', 'like', "%{$search}%");
        })->get();

        return view('resultat', compact('eleves', 'search'));
    }
}
