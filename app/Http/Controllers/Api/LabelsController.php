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

    public function store(Request $request) {
        dd($track = App\Label::create($request));

        // foreach($request->artists as $artistID) {
        //     if is_numeric($artistID) {
        //         $link = App\ArtistTracks::make();
        //         $link->trackID = $track->id;
        //         $link->artistID = $artistID;
        //     }
        // }

        foreach($request->tracks as $trackID) {
            if (is_numeric($trackID)) {
                $link = App\LabelTracks::make();
                $link->trackID = $track->id;
                $link->trackID = $trackID;
                $link->save();
            }
        }
    }

    public function show($id) {
        return Label::findOrFail($id);
    }
}
