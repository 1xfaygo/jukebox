@extends('layouts.blueprint')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/artists.css') }}">
@endsection

@section('body')
    <h1>Artists</h1>

    <ul>
        @foreach ($artists as $artist)
            <li>
            <a href="{{ route('artists.show', $artist) }}" style="color:#1DB954; font-weight:600; text-decoration:none;">{{ $artist->name }}</a> - {{ $artist->genre }}
                {{ $artist->name }} - {{ $artist->genre }}
                <form action="{{ route('artists.destroy', $artist) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this artist?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>


@endsection
