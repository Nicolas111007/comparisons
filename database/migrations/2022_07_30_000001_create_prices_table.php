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
            $table->foreignId('contract_id');
            $table->foreignId('area_id');
            $table->foreignId('energy_type_id');
            $table->foreignId('suppliers_id');
            $table->boolean('var_fix');
            $table->decimal('subscription',11,7);
            $table->decimal('mono',11,7);
            $table->decimal('bi_day',11,7)->nullable();
            $table->decimal('bi_night',11,7)->nullable();
            $table->decimal('excl_night',11,7)->nullable();
            $table->decimal('g_and_c_energy',11,7)->nullable();
            $table->date('date_price_val');
            $table->boolean('deleted')->default(0);

            $table->foreign('contract_id')->references('id')->on('contracts')
                    ->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('area_id')->references('id')->on('area')
                    ->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('energy_type_id')->references('id')->on('energy_type')
                    ->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('suppliers_id')->references('id')->on('suppliers')
                    ->onDelete('restrict')->onUpdate('cascade');
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
