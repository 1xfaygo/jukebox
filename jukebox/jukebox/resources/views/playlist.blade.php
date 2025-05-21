@extends('layouts.blueprint')

@section('body')
    <h1>Playlists</h1>

    <!-- Display Existing Playlists -->
    <div class="playlists-list mt-4">
        <h2>Your Playlists</h2>
        @if(isset($playlists) && $playlists->count() > 0)
            <div class="row">
                @foreach($playlists as $playlist)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $playlist->name }}</h5>
                                <p class="card-text">{{ count($playlist->songs) }} songs</p>
                                <a href="{{ route('playlist.show', $playlist->id) }}" class="btn btn-info">View</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No playlists created yet.</p>
        @endif
    </div>

    <!-- Create Playlist -->
    <div class="playlist-form mt-4">
        <h2>Create New Playlist</h2>
        <form action="{{ route('playlist.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="Playlist Name" required class="form-control">
            </div>
            <div class="form-group">
                <label for="songs">Select Songs:</label>
                <select name="songs[]" multiple class="form-control" id="songs">
                    @foreach($songs ?? [] as $song)
                        <option value="{{ $song->id }}">{{ $song->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create Playlist</button>
        </form>
    </div>
@endsection