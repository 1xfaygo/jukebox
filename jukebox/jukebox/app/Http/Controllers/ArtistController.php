<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    // Functie om artiesten te tonen
    public function index()
    {
        $artists = Artist::all();
        return view('artists', compact('artists'));
    }

    // Functie om een artiest aan te maken (display form)
    public function create()
    {
        return view('artists');
    }

    // Functie om een artiest op te slaan
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'genre' => 'required|string',
        ]);

        Artist::create($request->all());  // Maak een nieuwe artiest aan

        return redirect()->route('artists');
    }

    // Functie om een artiest te verwijderen
    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect()->route('artists');
    }
}
