<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Civility;


class CivilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table first
        Civility::truncate();

        //Define data
        $civility = [
            ['title'=>'Madame'],
            ['title'=>'Monsieur'],
        ];
            
        //Insert data in the table
        DB::table('civility')->insert($civility);
    }
}
