<?php

namespace App\Http\Controllers\Api;

use App\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtistsController extends Controller
{
        public function index()
        {
            return Artist::withCount('tracks')->get();
        }

}
