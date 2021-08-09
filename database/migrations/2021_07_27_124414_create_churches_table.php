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
            $table->unsignedBigInteger('holyperson_id');
            $table->unsignedBigInteger('community_id');
            $table->unsignedBigInteger('image_id');
            $table->foreign('holyperson_id')->references('id')->on('holypersons');
            $table->foreign('community_id')->references('id')->on('communitys');
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
        Schema::dropIfExists('churches');
    }
}
