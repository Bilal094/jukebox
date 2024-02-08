@extends('layouts.master')
@section('content')
<body>
    <h1>Dit is een totaaloverzicht van alle Playlisten</h1>
    <h3>Klik op een playlist om de details te zien of om het te bewerken</h3>
        <ul>
        @foreach($data as $playlist)
            <li>{{$playlist->name}}</a> | Totale duur: {{$playlist->songs()->sum('duration') / 60}} minuten <a href="{{route('playlist.view', ['playlist' => $playlist->id])}}"> - Weergeven - </a><a href="{{route('playlist.edit', ['playlist' => $playlist->id])}}"> Bewerk </a> <a href="{{route('playlist.destroy', ['playlist' => $playlist->id])}}"> - Verwijder</a></li>
        @endforeach
        </ul>

        <a href="{{route('playlist.create')}}" class="border border-gray-500 rounded p-1">Voeg een playlist toe</a>
</body>
@endsection