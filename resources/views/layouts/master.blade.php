<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <nav>
        <a href="{{route('master')}}">Home</a>
        <a href="{{route('genre.index')}}">Genres</a>
        <a href="{{route('song.index')}}">Songs</a>
        <a href="{{route('playlist.index')}}">Playlists</a>
        <a href="">Log in/Register</a>
    </nav>

    @yield('content')

</body>
</html>