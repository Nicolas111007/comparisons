<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Suppliers;


class SuppliersSeeder extends Seeder
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
        Suppliers::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Define data
        $suppliers = [
            ['supplier_name'=>'Antargaz'],
            ['supplier_name'=>'Eneco'],
            ['supplier_name'=>'Energie2030'],
            ['supplier_name'=>'Engie'],
            ['supplier_name'=>'Essent'],
            ['supplier_name'=>'Lampiris'],
            ['supplier_name'=>'Luminus'],
            ['supplier_name'=>'Mega'],
            ['supplier_name'=>'Octa +'],
            ['supplier_name'=>'Watz'],
            ['supplier_name'=>'Bolt'],
            ['supplier_name'=>'Energie.be'],
        ];
            
        //Insert data in the table
        DB::table('suppliers')->insert($suppliers);

    }
}
