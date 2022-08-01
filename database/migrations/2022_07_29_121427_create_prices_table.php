<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('contract_id');
            $table->string('area_id');
            $table->string('energy_type_id');
            $table->string('subscription');
            $table->string('mono');
            $table->string('bi_day');
            $table->string('bi_night');
            $table->string('excl_night');
            $table->string('g_and_c_energy');
            $table->string('date_price_val');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
