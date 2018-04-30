<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = [
        'name',
        'pictureID'
    ];

    public function tracks()
    {
        return $this->belongsToMany(Track::class, 'collection_tracks', 'collectionID', 'trackID');
    }
}
