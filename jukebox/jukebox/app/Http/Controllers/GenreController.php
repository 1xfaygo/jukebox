<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        // Retrieve all genres from the database
        $genres = Genre::all();

        // Pass the genres to the view
        return view('genres', compact('genres'));
    }
}
