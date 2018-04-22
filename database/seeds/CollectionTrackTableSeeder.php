<?php

use Illuminate\Database\Seeder;

class CollectionTrackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tracks = App\Track::all();
        $collections = App\Artist::all();

        $collections->each(function($collection) use ($tracks) {
            DB::table('collection_tracks')->insert([
                'collectionID' => $collection['id'],
                'trackID' => $tracks->random(1)->pluck('id')[0] //TODO: Not this.
            ]);
        });
        $tracks->each(function($track) use ($collections) {
            DB::table('collection_tracks')->insert([
                'collectionID' => $collections->random(1)->pluck('id')[0],
                'trackID' => $track['id']
            ]);
        });
        for ($i = 0; $i < 30; $i++) {
            DB::table('collection_tracks')->insert([
                'collectionID' => $collections->random(1)->pluck('id')[0],
                'trackID' => $tracks->random(1)->pluck('id')[0]
            ]);
        }
    }
}
