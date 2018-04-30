<?php

namespace App\Http\Controllers\Api;

use App\Label;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LabelsController extends Controller
{
    public function index($type) {
        if ($type == 'all') {
            return Label::all();
        }
        if ($type == 'summary') {
            return Label::select(['name', 'id'])->withCount('tracks as miscCount')->get();
        }
    }
}
