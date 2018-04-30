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
        return $this->belongsToMany(Artist::class, 'artist_tracks', 'trackID', 'artistID')->where('artist_tracks.type','artist');
    }
    public function vocalists()
    {
        return $this->belongsToMany(Artist::class, 'artist_tracks', 'trackID', 'artistID')->where('artist_tracks.type','artist');
    }
    public function characteristics() 
    {
        return $this->belongsToMany(Characteristic::class, 'characterisic_tracks', 'trackID', 'characterisicID');
    }

    protected $with = ['artists', 'vocalists', 'characteristics'];
    // protected $appends = ['artists'];
}
