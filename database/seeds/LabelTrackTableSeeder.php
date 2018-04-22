<?php

use Illuminate\Database\Seeder;

class LabelTrackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tracks = App\Track::all();
        $labels = App\Label::all();

        $labels->each(function($label) use ($tracks) {
            DB::table('label_tracks')->insert([
                'labelID' => $label['id'],
                'trackID' => $tracks->random(1)->pluck('id')[0] //TODO: Not this.
            ]);
        });
        $tracks->each(function($track) use ($labels) {
            for ($i = 0; $i < rand(0, 2); $i++) {
                DB::table('label_tracks')->insert([
                    'labelID' => $labels->random(1)->pluck('id')[0],
                    'trackID' => $track['id']
                ]);
            }
        });
    }
}
