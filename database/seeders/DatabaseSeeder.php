<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([AreaSeeder::class]);
        $this->call([CivilitySeeder::class]);
        $this->call([ContractsSeeder::class]);
        $this->call([EnergyTypeSeeder::class]);
        $this->call([PcLocalitySeeder::class]);
        $this->call([PricesSeeder::class]);
        $this->call([SuppliersSeeder::class]);
    }
}
