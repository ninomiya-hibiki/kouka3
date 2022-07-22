<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePepopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
   Schema::create('people', function (Blueprint $table) {
       $table->increments('id');
       $table->string('name');
       $table->string('amo');
       $table->integer('head');
       $table->integer('body');
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
        Schema::dropIfExists('pepople');
    }
}
