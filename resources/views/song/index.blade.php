@extends('layouts.master')
@section('content')
<a href="/dashboard">< Ga terug</a>

<body>
    <h1>Dit is een totaaloverzicht van alle Songs</h1>
    <ul>
    @foreach($songs as $song)
        <li>{{$song->name}}<a href="{{route('song.view', ['song' => $song->id])}}">Weergeven</a> <a href="{{route('song.destroy', ['song' => $song->id])}}">X</a></li>

    @endforeach
    </ul>

    <a href="{{route('song.create')}}">Create a song</a>
</body>
@endsection