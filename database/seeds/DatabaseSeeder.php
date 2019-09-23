<?php

use Illuminate\Database\Seeder;
use App\Specialist;
use App\Customer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SpecialistsTableSeeder::class,
            CustomersTableSeeder::class,
        ]);
    }
}
