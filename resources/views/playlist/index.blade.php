@extends('layouts.master')
@section('content')
<body>
    <h1>Dit is een totaaloverzicht van alle Playlists</h1>
    <h3>Klik op een playlist om de details te zien of om het te bewerken</h3>
        <ul>
        @foreach($data as $playlist)
            <li><a href="{{route('playlist.edit', ['playlist' => $playlist->id])}}">{{$playlist->name}}</a> | Totale duur: {{$playlist->songs()->sum('duration') / 60}} minuten  <a href="{{route('playlist.destroy', ['playlist' => $playlist->id])}}">X</a></li>
        @endforeach
        </ul>

        <a href="{{route('playlist.create')}}">Create a playlist</a>
</body>
@endsection