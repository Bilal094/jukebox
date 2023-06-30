@extends('layouts.master')
@section('content')
<body>
    <h3>Naam lied: {{$song->name}}</h3>
    <h3>Auteur: {{$song->author}}</h3>
    <h3>Duur: {{$song->duration}} seconden</h3>
    <h3>Releasedatum: {{$song->releasedate}}</h3>
</body>
@endsection