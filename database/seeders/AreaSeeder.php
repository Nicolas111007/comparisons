<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Area;


class AreaSeeder extends Seeder
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
        Area::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Define data
        $area = [
        ['area_name'=>'Wallonie','abbreviation'=>'WAL'],
        ['area_name'=>'Bruxelles','abbreviation'=>'BRU'],
        ['area_name'=>'Flandre','abbreviation'=>'FLA'],
        ];
        
        //Insert data in the table
        DB::table('area')->insert($area);

    }
}
