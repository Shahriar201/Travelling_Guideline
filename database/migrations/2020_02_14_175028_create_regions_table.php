<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Region;

class CreateRegionsTable extends Migration
{
 
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable();
            

            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
