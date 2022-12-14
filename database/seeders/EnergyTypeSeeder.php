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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        EnergyType::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Define data
        $energy_type = [
            ['energy_name'=>'√Člectricit√©', 'energy_abbr'=>'E'],
            ['energy_name'=>'Gaz', 'energy_abbr'=>'G'],
        ];
            
        //Insert data in the table
        DB::table('energy_type')->insert($energy_type);
    }
}
