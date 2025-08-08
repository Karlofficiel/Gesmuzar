<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Voiture extends Migration
{
   
    public function up()
    {
        Schema::create('voiture', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('age');
            $table->string('marque');
            $table->string('nomvoiture');
            $table->string('prix');
            $table->string('statut');
            $table->timestamps();
        });   
    }

    public function down()
    {
        Schema::dropIfExists('voiture');
    }
}

