<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('churches', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->float('latitude');
            $table->float('longitude');
            $table->unsignedBigInteger('holypersons_id');
            $table->unsignedBigInteger('communitys_id');
            $table->unsignedBigInteger('images_id');
            $table->foreign('holypersons_id')->references('id')->on('holypersons');
            $table->foreign('communitys_id')->references('id')->on('communitys');
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
        Schema::dropIfExists('churches');
    }
}
