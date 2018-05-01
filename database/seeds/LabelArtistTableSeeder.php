<?php

use Illuminate\Database\Seeder;

class LabelArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists = App\Artist::all();
        $labels = App\Label::all();

        $labels->each(function($label) use ($artists) {
            for ($i = 0; $i < rand(1,3); $i++) {
                DB::table('label_artists')->insert([
                    'labelID' => $label['id'],
                    'artistID' => $artists->random(1)->pluck('id')[0] //TODO: Not this.
                ]);
                }
        });
    }
}
