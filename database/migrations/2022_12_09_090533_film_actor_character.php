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
        Schema::create('film_actor_character', function (Blueprint $table) {
            $table->string('movie_id');
            $table->string('actor_id');
            $table->foreign('movie_id')->references('actor_id')->on('actors')->onDelete('cascade');
            $table->foreign('actor_id')->references('movie_id')->on('movies')->onDelete('cascade');
 });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
