@extends('layouts.master')
@section('content')
<h1>Dit is een totaaloverzicht van alle Genres</h1>
    <ul>
    @foreach($genres as $genre)
        <li>{{$genre->name}} <a href="{{route('genre.destroy', ['genre' => $genre->id])}}"> - X </a></li>
    @endforeach
    </ul>

    <a href="{{ route('genre.create') }}" class="border border-gray-500 rounded p-1">Voeg een genre toe</a>
@endsection