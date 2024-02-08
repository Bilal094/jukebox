@extends('layouts.master')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <h1>Genres:</h1>
    <form action="{{route('genre.store')}}" method="post">
        @csrf
        <label>Vul een naam voor het genre in</label>
        @error('genreName')
            <div class="error">Vul a.u.b een genre naam in!</div>
        @enderror
        <input name="genreName" type="text">
        <input type="submit" value="Toepassen" class="border border-gray-500 rounded p-1">
        <a href="{{route('genre.index')}}" class="border border-gray-500 rounded p-1">Terug</a>
    </form>
</body>
@endsection