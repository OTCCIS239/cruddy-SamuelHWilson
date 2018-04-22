<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharacterisicTrack extends Model
{
    protected $fillable = [
        'characteristicID',
        'trackID'
    ];
}
