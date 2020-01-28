<?php

use App\Models\Incident_Report;
use Illuminate\Database\Seeder;

class Incident_ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Incident_Report::class,10)->create();
    }
}
