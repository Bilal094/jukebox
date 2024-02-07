@extends('layouts.master')
@section('content')
<a href="/dashboard">< Ga terug</a>

<h1>Dit is een totaaloverzicht van alle Genres</h1>
    <ul>
    @foreach($genres as $genre)
        <li>{{$genre->name}} <a href="{{route('genre.destroy', ['genre' => $genre->id])}}">X</a></li>
    @endforeach
    </ul>

    <a href="{{route('genre.create')}}">Create a genre</a>
@endsection