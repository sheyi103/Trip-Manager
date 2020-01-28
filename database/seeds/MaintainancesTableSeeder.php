<?php

use App\Models\Maintainance;
use Illuminate\Database\Seeder;

class MaintainancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Maintainance::class,10)->create();
    }
}
