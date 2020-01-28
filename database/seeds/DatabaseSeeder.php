<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CarsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        
        $this->call(RolesTableSeeder::class);
        $this->call(TripsTableSeeder::class);
        $this->call(MaintainancesTableSeeder::class);
        $this->call(Fuel_PurchasesTableSeeder::class);
        $this->call(Incident_ReportsTableSeeder::class);
        $this->call(WorkshopsTableSeeder::class);
        // factory('App\Models\Trip', 100)->create();
        // factory('App\Models\Maintainance', 30)->create();
        // factory('App\Models\Incident_Report', 30)->create();
        // factory('App\Models\Fuel_Purchase', 50)->create();





    }
}
