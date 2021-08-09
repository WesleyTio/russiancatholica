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
            $table->unsignedBigInteger('church_id');
            $table->unsignedBigInteger('image_id');
            $table->foreign('church_id')->references('id')->on('churches');
            $table->foreign('image_id')->references('id')->on('images');
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
