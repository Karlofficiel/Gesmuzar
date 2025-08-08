<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoachatsTable extends Migration
{
 
    public function up()
    {
        Schema::create('infoachats', function (Blueprint $table) {
            $table->id();
            $table->string('nameU');
            $table->string('ageU');
            $table->string('marqueU');
            $table->string('nomvoitureU');
            $table->string('prixU');
            $table->string('statutU');
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
        Schema::dropIfExists('infoachats');
    }
}
