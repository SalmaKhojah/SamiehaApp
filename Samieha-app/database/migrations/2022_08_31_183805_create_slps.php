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
        Schema::create('slps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userslp_id');
            $table->foreign('userslp_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('slp_email');
            $table->string('slp_password');
            $table->string('F_slp_name');
            $table->string('L_slp_name');
            $table->string('work_place');
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
        Schema::dropIfExists('slps');
    }
};
