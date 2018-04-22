<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtistTrack extends Model
{
    protected $fillable = [
        'artistID',
        'trackID'
    ];
}
