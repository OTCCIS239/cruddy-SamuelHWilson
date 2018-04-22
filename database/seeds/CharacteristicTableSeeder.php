<?php

use Illuminate\Database\Seeder;

class CharacteristicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Characteristic::class, 50)->create();                
    }
}
