<?php

namespace App\Http\Controllers\Api;

use App\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtistsController extends Controller
{
    public function index($type) {
        if ($type == 'all') {
            return Artist::all();
        }
        if ($type == 'summary') {
            return Artist::select(['name', 'id'])->withCount('tracks as miscCount')->get();
        }
        if ($type == 'min') {
            return Artist::select(['name', 'id'])->get();
        }
    }
}
