<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId("sender_id")->constrained('user')->onDelete('cascade');
            $table->foreignId("receiver_id")->constrained('user')->onDelete('cascade');
            $table->text("message");  
            $table->foreignId("reply_to")->nullable()->constrained('message')->onDelete('cascade');  // messages parents
            $table->timestamps();
        });
    }
   
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
