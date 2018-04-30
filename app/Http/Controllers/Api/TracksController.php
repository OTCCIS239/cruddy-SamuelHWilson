<?php

namespace App\Http\Controllers\Api;

use App\Track;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TracksController extends Controller
{
    public function index() {
        return Track::all()->toArray();
    }
}
