<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('suppliers_id');
            $table->foreignId('energy_type_id');
            $table->string('contract_name')->length(50);
            $table->boolean('var_fix');
            $table->tinyInteger('time_contract');
            $table->string('abbreviation')->length(15);
            $table->boolean('active_contract');

            $table->foreign('suppliers_id')->references('id')->on('suppliers')
                    ->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('energy_type_id')->references('id')->on('energy_type')
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
        Schema::dropIfExists('contracts');
    }
}
