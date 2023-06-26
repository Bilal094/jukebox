<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Songs - Create</title>
</head>
<body>
    <h1>Add a Song</h1>
    <form method="POST" action="{{route('song.store')}}">
        @csrf
        @error('name')
            <div class="error">Vul a.u.b de naam van het liedje in!</div>
        @enderror
        <label>Vul een naam voor het liedje in</label>
        <input name="name" type="text">
        <br>

        @error('author')
            <br>
            <div class="error">Vul a.u.b de naam van de artiest in!</div>
        @enderror
        <label>Vul een author voor het liedje in</label>
        <input name="author" type="text">
        <br>

        @error('releasedate')
            <br>
            <div class="error">Vul a.u.b de releasedatum van het liedje in!</div>
        @enderror
        <label>Vul een releasedate voor het liedje in</label>
        <input name="releasedate" type="date">
        <br>

        @error('duration')
            <br>
            <div class="error">Vul a.u.b de duur van het liedje in!</div>
        @enderror
        <label>Vul een duratie voor het liedje in</label>
        <input name="duration" type="number">
        <br>

        <input type="submit" value="Send me!">
    </form>
</body>
</html>
