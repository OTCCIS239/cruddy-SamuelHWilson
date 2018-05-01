<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TrackTableSeeder::class);
        $this->call(ArtistTableSeeder::class);
        $this->call(LabelTableSeeder::class);
        $this->call(CharacteristicTableSeeder::class);
        $this->call(CollectionTableSeeder::class);
        $this->call(ArtistTrackTableSeeder::class);
        $this->call(LabelTrackTableSeeder::class);
        $this->call(CharacterisicTrackTableSeeder::class);
        $this->call(CollectionTrackTableSeeder::class);
        $this->call(LabelArtistTableSeeder::class);
    }
}
