<?php

namespace App\Http\Controllers\Api;

use App\Characteristic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CharacteristicsController extends Controller
{
    public function index($type) {
        if ($type == 'all') {
            return Characteristic::all();
        }
    }
}
