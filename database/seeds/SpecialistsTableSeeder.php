<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SpecialistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Specialist', 3)->create();
    }
}
