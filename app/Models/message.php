<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;

    protected $table = 'messages';
    protected  $fillable = ['sender_id','receiver_id','message','reply_to'];

      public function sender(){
        
        return $this->belongsTo(User::class, 'sender_id');
      }

      public function receiver(){
        
        return $this->belongsTo(User::class, 'receiver_id');
      }
      
      public function parentMessage()
      {
          return $this->belongsTo(Message::class, 'reply_to');
      }
  
      public function replies()
      {
          return $this->hasMany(Message::class, 'reply_to');
      }

}
