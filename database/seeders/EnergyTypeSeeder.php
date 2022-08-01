<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\EnergyType;


class EnergyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table first
        EnergyType::truncate();

        //Define data
        $energy_type = [
            ['energy_name'=>'Électricité', 'energy_abbr'=>'E'],
            ['energy_name'=>'Gaz', 'energy_abbr'=>'G'],
        ];
            
        //Insert data in the table
        DB::table('energy_type')->insert($energy_type);
    }
}
