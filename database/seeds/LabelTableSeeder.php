<?php

use Illuminate\Database\Seeder;

class LabelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Label::class, 50)->create();
        
    }
}
