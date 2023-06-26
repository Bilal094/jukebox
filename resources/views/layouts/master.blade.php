<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <nav>
        <li><a href="{{route('master')}}">Home</a></li>
        <li><a href="{{route('genre.index')}}">Genres</a></li>
    </nav>
<main>
    @yield('content')
    Home pagina
</main>
</body>
</html>