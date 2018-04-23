<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name',
        'bio',
        'pictureID'
    ];

    public function tracks()
    {
        return $this->belongsToMany(Track::class, 'artist_tracks', 'artistID', 'trackID');
    }
}
