<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $fillable = [
        'name',
        'pictureID'
    ];

    public function artists()
    {
        return $this->belongsToMany(Artist::class, 'artist_tracks', 'trackID', 'artistID');
    }
}
