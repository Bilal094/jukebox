@extends('layouts.master')
@section('content')
<body>
    <h1>Bewerk playlist</h1>
    <form method="GET" action="{{route('playlist.update')}}">
        @csrf
        @error('song')
        <div class="error">Voeg eerst een liedje toe!</div>
        @enderror
        <label>Voeg een liedje toe</label>
        <select name="song">
            @foreach($songs as $song)
                <option value="{{$song->id}}">{{$song->name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Send me!">
    </form>
</body>
@endsection