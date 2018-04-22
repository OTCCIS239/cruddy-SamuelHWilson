<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabelTrack extends Model
{
    protected $fillable = [
        'labelID',
        'trackID'
    ];
}
