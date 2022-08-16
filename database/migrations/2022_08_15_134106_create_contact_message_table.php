<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_message', function (Blueprint $table) {
            $table->id();
            $table->foreignId('civility_id');
            $table->string('name')->length(100);
            $table->string('first_name')->length(100);
            $table->string('email')->length(254);
            $table->string('phone')->length(9)->nullable();
            $table->string('mobilephone')->length(10)->nullable();
            $table->string('messobject')->length(100);
            $table->string('message')->length(5000);
            $table->string('identify')->unique();
            $table->timestamp('datetime')->useCurrent();

            $table->foreign('civility_id')->references('id')->on('civility')
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
        Schema::dropIfExists('contact_message');
    }
}
