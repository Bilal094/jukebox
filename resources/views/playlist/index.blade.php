@extends('layouts.master')
@section('content')
<body>
    <h1>Dit is een totaaloverzicht van alle Playlists</h1>
        <ul>
        @foreach($data as $playlist)
            <li>{{$playlist->name}} <a href="{{route('playlist.destroy', ['playlist' => $playlist->id])}}">X</a></li>
        @endforeach
        </ul>

        <a href="{{route('playlist.create')}}">Create a playlist</a>
</body>
@endsection