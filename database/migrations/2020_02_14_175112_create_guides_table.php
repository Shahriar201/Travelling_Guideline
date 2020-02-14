<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuidesTable extends Migration
{
   
    public function up()
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->string('image')->nullable();
            $table->unsignedBiginteger('place_id');
            $table->string('nearby_hotel');
            $table->timestamps();

        });
    }

    
    public function down()
    {
        Schema::dropIfExists('guides');
    }
}
