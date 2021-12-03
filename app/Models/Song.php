<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','artist','duration', 'genre_id'];

    public function playlists(){
        return $this->belongsToMany(Playlist::class);
    }

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}
