@extends('layouts.master')
@section('content')
<body>
    <h3>Playlist naam: {{$playlist->name}}</h3>
    <h3>Liedjes:</h3>
    @foreach($addedSongs as $song)
        <li>{{$song->name}} | {{$song->duration}} seconden | {{$song->releasedate}}</li> <br>
    @endforeach

    <a href="{{route('playlist.index')}}">Terug</a>
</body>
@endsection