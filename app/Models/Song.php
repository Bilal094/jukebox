<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;
use App\Models\Playlist;

class Song extends Model
{
    protected $fillable = ['name', 'author', 'releasedate', 'duration','genre_id'];

    use HasFactory;

    public function playlists()
    {
        return $this->belongsToMany(Playlist::class, 'playlist_song', 'song_id', 'playlist_id');
    }

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}
