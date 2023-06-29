<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Playlist extends Model
{
    protected $fillable = ['name'];
    use HasFactory;


    public function songs()
    {
        return $this->belongsToMany(Song::class, 'playlist_song', 'playlist_id', 'song_id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
