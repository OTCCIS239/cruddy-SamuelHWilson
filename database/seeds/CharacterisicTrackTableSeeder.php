<?php

use Illuminate\Database\Seeder;

class CharacterisicTrackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tracks = App\Track::all();
        $characteristics = App\Characteristic::all();

        $characteristics->each(function($characteristic) use ($tracks) {
            DB::table('characterisic_tracks')->insert([
                'characterisicID' => $characteristic['id'],
                'trackID' => $tracks->random(1)->pluck('id')[0] //TODO: Not this.
            ]);
        });
        $tracks->each(function($track) use ($characteristics) {
            DB::table('characterisic_tracks')->insert([
                'characterisicID' => $characteristics->random(1)->pluck('id')[0],
                'trackID' => $track['id']
            ]);
        });
        for ($i = 0; $i < 30; $i++) {
            DB::table('characterisic_tracks')->insert([
                'characterisicID' => $characteristics->random(1)->pluck('id')[0],
                'trackID' => $tracks->random(1)->pluck('id')[0]
            ]);
        }
    }
}
