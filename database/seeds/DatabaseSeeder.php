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

        // $customers = factory(App\Customer::class, 3)
        //    ->create()
        //    ->each(function ($customer) {
        //         $customer->specialist()->save(factory(App\Specialist::class)->make());
        //     });
    }
}
