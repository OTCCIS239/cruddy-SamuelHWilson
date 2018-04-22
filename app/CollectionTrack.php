<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollectionTrack extends Model
{
    protected $fillable = [
        'collectionID',
        'trackID'
    ];
}
