<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('location');
            $table->unsignedBiginteger('region_id');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('places');
    }
}
