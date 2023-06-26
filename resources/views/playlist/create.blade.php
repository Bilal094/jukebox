<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Playlist - Create</title>
</head>
<body>
    <h1>Add a Playlist</h1>
    <form method="POST" action="{{route('playlist.store')}}">
        @csrf
        @error('name')
        <div class="error">Vul a.u.b de naam van de playlist in!</div>
        @enderror
        <label>Vul een naam voor het playlist in</label>
        <input name="name" type="text">
        <input type="submit" value="Send me!">
    </form>
</body>
</html>
