<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunitysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communitys', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('history');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('areas_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('areas_id')->references('id')->on('areas');
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
        Schema::dropIfExists('communitys');
    }
}
