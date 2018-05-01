<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $fillable = [
        'name',
        'pictureID'
    ];

    public function tracks() {
        return $this->belongsToMany(Track::class, 'label_tracks', 'labelID', 'trackID');        
    }
    public function artists() {
        return $this->belongsToMany(Artist::class, 'label_artists', 'labelID', 'artistID');        
    }

    protected $with = ['tracks', 'artists'];
}
