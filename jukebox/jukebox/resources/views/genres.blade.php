@extends("layouts.blueprint")

@section('head')
<link rel="stylesheet" href="{{ asset('css/genres.css') }}">
@endsection



@section('body')
<div>
    <h1>Genres</h1>
    <ul>
        @foreach ($genres as $genre)
            <li>
                <button>{{ $genre->name }}</button>
            </li>
        @endforeach
    </ul>
</div>
<a href="/">Back to Home</a>
@endsection
