<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatrysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrys', function (Blueprint $table) {
            $table->id();
            $table->string('theme')->nullable();
            $table->string('date_init')->nullable();
            $table->string('date_final')->nullable();
            $table->unsignedBigInteger('churches_id');
            $table->unsignedBigInteger('images_id');
            $table->foreign('churches_id')->references('id')->on('churches');
            $table->foreign('images_id')->references('id')->on('images');
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
        Schema::dropIfExists('patrys');
    }
}
