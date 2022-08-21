<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('civility_id');
            $table->foreignId('pc_locality_id');
            $table->foreignId('area_id');
            $table->string('name')->length(100);
            $table->string('first_name')->length(100);
            $table->date('birth_date');
            $table->string('email')->unique()->length(254);
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password')->length(254);
            $table->rememberToken();
            $table->char('housephone')->length(9)->nullable();
            $table->char('mobilephone')->length(10)->nullable();
            $table->string('unique_id')->length(32);
            $table->boolean('active');
            $table->boolean('subscriber');
            $table->boolean('is_admin')->default(0);
            // $table->timestamps();

            $table->foreign('civility_id')->references('id')->on('civility')
                    ->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('pc_locality_id')->references('id')->on('pc_locality')
                    ->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('area_id')->references('id')->on('area')
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
        Schema::dropIfExists('users');
    }
}
