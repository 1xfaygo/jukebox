<?php

// app/Http/Controllers/PlaylistController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;
use App\Models\Song;

class PlaylistController extends Controller
{
    // Display the playlists page
    public function index()
    {
        // Fetch all playlists with their songs
        $playlists = Playlist::with('songs')->get();

        // Fetch all songs for the dropdown
        $songs = Song::all();

        // Pass the data to the view
        return view('playlist', compact('playlists', 'songs'));
    }

    // Store a new playlist
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required',
            'songs' => 'array'
        ]);

        // Create the playlist
        $playlist = Playlist::create([
            'name' => $validated['name']
        ]);

        // Attach selected songs to the playlist
        if (isset($validated['songs'])) {
            $playlist->songs()->attach($validated['songs']);
        }

        // Redirect back to the playlists page with a success message
        return redirect()->route('playlist.index')->with('success', 'Playlist created successfully!');
    }

    // Show a specific playlist
    public function show(Playlist $playlist)
    {
        return view('playlist.show', compact('playlist'));
    }
}