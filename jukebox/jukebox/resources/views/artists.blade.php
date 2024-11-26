@extends("layouts.blueprint")

@section('head')
    <!-- Link to the specific CSS file -->
    <link rel="stylesheet" href="{{ asset('css/artists.css') }}">
@endsection

@section('body')
<h1>Artists</h1>
<ul>
    @foreach ($artists as $artist)
        <li>{{ $artist->name }} - {{ $artist->genre }}</li>
    @endforeach
</ul>
<a href="/">Back to Home</a>
@endsection