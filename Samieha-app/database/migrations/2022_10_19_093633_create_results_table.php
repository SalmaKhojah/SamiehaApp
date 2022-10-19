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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('session_id');
            $table->foreign('session_id')->references('id')->on('session')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('patient_id')->unique()->nullable();
            $table->foreign('patient_id')->nullable()->references('users_id')->on('patients')->onDelete('SET NULL')->onUpdate('cascade');
            $table->string('correct_answer');
            $table->string('incorrect_answer');
            $table->string('cues_reached');
            $table->string('patient_record');
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
        Schema::dropIfExists('results');
    }
};
