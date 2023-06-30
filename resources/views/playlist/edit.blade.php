@extends('layouts.master')
@section('content')
<body>
    <h1>Bewerk playlist</h1>
    <h3>Toegevoegde liedjes in playlist:</h3>
    @foreach($addedSongs as $addedSong)
        <li>{{$addedSong->name}} <a href="{{route('playlist.detach', ['playlist' => $playlist->id, 'song' => $addedSong->id])}}">Verwijder</a></li> 
    @endforeach 

    <form method="POST" action="{{ route('playlist.update', ['playlist' => $playlist->id]) }}">
        <input type="hidden" name="id" value="{{ $playlist->id }}">
        @csrf
        @method('PUT')
        @error('song')
        <div class="error">Voeg eerst een liedje toe!</div>
        @enderror
        <label>Voeg een liedje toe</label>
        <select name="song">
        <option value="" selected disabled hidden>Choose here</option>
            @foreach($songs as $song)
                <option value="{{$song->id}}">{{$song->name}}</option>
            @endforeach
        </select> <br> <br>

        <label for="namePlaylist">Verander de naam van de playlist</label>
        <input type="text" name="namePlaylist"> <br><br>
        <input type="submit" value="Toepassen">
        <a href="{{route('playlist.index')}}">Terug</a>
    </form>
</body>
@endsection