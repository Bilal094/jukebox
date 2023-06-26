<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song genres</title>
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
        <input type="submit" value="Send me!">
    </form>
</body>
</html>