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
        Schema::create('slp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_national_id');
            $table->foreign('patient_national_id')->references('national_id')->on('patient')->onDelete('SET NULL')->onUpdate('cascade');
            $table->string('work_place');
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
        Schema::dropIfExists('speech_and_language_pathologist');
    }
};
