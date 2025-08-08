<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modepayement extends Model
{
    use HasFactory;
    
    protected $table = 'modepayement';
    protected  $fillable = ['user_id','payment_method'];

    
    public function user()
    {
        return $this->belongTo(User::class, 'user_id');
    }
}
