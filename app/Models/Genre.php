<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ["name"];

    public function song()
    {
        return $this->hasMany(Song::class);
    }
}
