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
        Schema::create('actors', function (Blueprint $table) {
            $table->string('actor_id')->primary();
            $table->string('actorname');
            $table->string('realname');
            $table->string('picurl');
            $table->date('birthyear');
            $table->string('birthplace');
            $table->text('bio', 60000);
            $table->text('trademarks', 60000);
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
        Schema::dropIfExists('actors');
    }
};
