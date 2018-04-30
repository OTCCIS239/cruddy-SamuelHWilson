<?php

use Illuminate\Database\Seeder;

class ArtistTrackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tracks = App\Track::all();
        $artists = App\Artist::all();

        $artists->each(function($artist) use ($tracks) {
            DB::table('artist_tracks')->insert([
                'artistID' => $artist['id'],
                'type' => 'artist',
                'trackID' => $tracks->random(1)->pluck('id')[0] //TODO: Not this.
            ]);
        });
        $tracks->each(function($track) use ($artists) {
            DB::table('artist_tracks')->insert([
                'artistID' => $artists->random(1)->pluck('id')[0],
                'type' => 'artist',
                'trackID' => $track['id']
            ]);
            for($i = 0; $i < rand(0,2); $i++) {
                DB::table('artist_tracks')->insert([
                    'artistID' => $artists->random(1)->pluck('id')[0],
                    'type' => 'vocalist',
                    'trackID' => $track['id']
                ]);
            }
        });
    }
}
