<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('national_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birth_date');
            $table->string('phone');
            $table->string('nationality');
            $table->string('region');
            $table->string('city');
            $table->string('diagnosis');
            $table->string('characteristics');
            $table->string('neurological_damage');
            $table->string('severity');
            $table->string('assesment_method');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
