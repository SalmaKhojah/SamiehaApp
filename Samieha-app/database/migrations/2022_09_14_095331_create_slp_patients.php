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
        Schema::create('slp_patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')->unique()->nullable();
            $table->foreign('patient_id')->nullable()->references('users_id')->on('patients')->onDelete('SET NULL')->onUpdate('cascade');
            $table->unsignedBigInteger('slp_id')->nullable();
            $table->foreign('slp_id')->nullable()->references('users_id')->on('slps')->onDelete('SET NULL')->onUpdate('cascade');
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
        Schema::dropIfExists('slp_patients');
    }
};
