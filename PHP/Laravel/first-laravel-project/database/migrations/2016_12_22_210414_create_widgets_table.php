<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWidgetsTable extends Migration
{
    /**
      * Run the migrations.
      */
     public function up()
     {
         Schema::create('widgets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->timestamps();
        });
     }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('widgets');
    }
}
