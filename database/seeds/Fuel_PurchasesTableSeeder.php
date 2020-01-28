<?php

use App\Models\Fuel_Purchase;
use Illuminate\Database\Seeder;

class Fuel_PurchasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Fuel_Purchase::class,10)->create();
    }
}
