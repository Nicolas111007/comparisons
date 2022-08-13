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
            ['supplier_name'=>'Antargaz','active_supplier'=>'1'],
            ['supplier_name'=>'Eneco','active_supplier'=>'1'],
            ['supplier_name'=>'Energie2030','active_supplier'=>'1'],
            ['supplier_name'=>'Engie','active_supplier'=>'1'],
            ['supplier_name'=>'Essent','active_supplier'=>'0'],
            ['supplier_name'=>'Lampiris','active_supplier'=>'1'],
            ['supplier_name'=>'Luminus','active_supplier'=>'1'],
            ['supplier_name'=>'Mega','active_supplier'=>'1'],
            ['supplier_name'=>'Octa +','active_supplier'=>'1'],
            ['supplier_name'=>'Watz','active_supplier'=>'0'],
            ['supplier_name'=>'Bolt','active_supplier'=>'1'],
            ['supplier_name'=>'Energie.be','active_supplier'=>'1'],
        ];
            
        //Insert data in the table
        DB::table('suppliers')->insert($suppliers);

    }
}
