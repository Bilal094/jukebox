@extends('layouts.master')
@section('content')
<body>
    <h1>Dit is een totaaloverzicht van alle liedjes</h1>
    <ul>
    @foreach($songs as $song)
        <li>{{$song->name}}<a href="{{route('song.view', ['song' => $song->id])}}"> - Weergeven - </a> <a href="{{route('song.destroy', ['song' => $song->id])}}"> X</a></li>

    @endforeach
    </ul>

    <a href="{{route('song.create')}}" class="border border-gray-500 rounded p-1">Voeg een liedje toe</a>
</body>
@endsection