<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voiture extends Model
{
    use HasFactory;
    
    protected $table = 'voiture';
    protected  $fillable = ['user_id','name','age','marque','nomvoiture','prix','statut'];

    
    public function user()
    {
        return $this->belongTo(User::class, 'user_id');
    }

}


