<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=[
            [
                "name"=>"Admin",
               
            ],
            [
                "name"=>"Supervisor",
               
            ],
            [
                "name"=>"Driver",
               
            ],
           
        ];

        foreach ($roles as $role){
            Role::create($role);
        }
    }
}
