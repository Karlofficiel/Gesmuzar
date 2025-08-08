<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
  
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('numero');
            $table->string('email')->unique();
            $table->string('password')->unique();
            $table->string('role_id');
            $table->boolean('is_blocked')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
       Schema::dropIfExists('user');
    }
}
