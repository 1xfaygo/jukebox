<?php

namespace App\Http\Controllers;

use App\Models\Artist;

class ArtistController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function list()
    {
        $artists = Artist::all();
        return view('artists', compact('artists'));
    }
}
