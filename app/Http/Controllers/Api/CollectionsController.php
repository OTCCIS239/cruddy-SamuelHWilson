<?php

namespace App\Http\Controllers\Api;

use App\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectionsController extends Controller
{
    public function index($type) {
        if ($type == 'all') {
            return Collection::all();
        }
        if ($type == 'summary') {
            return Collection::select(['name', 'id'])->withCount('tracks as miscCount')->get();
        }
    }
}
