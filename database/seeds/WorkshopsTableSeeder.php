<?php

use App\Models\Workshop;
use Illuminate\Database\Seeder;

class WorkshopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $workshops=[
            [
                "name"=>"Toyota Station",
               
            ],
            [
                "name"=>"Honda Station",
               
            ],
            [
                "name"=>"Kia Station",
               
            ],
           
        ];

        foreach ($workshops as $workshop){
            Workshop::create($workshop);
        }
    }
}
