<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infoachat extends Model
{
    use HasFactory;
    protected $table = 'infoachats';
    protected  $fillable = ['nameU','ageU','marqueU','nomvoitureU','prixU','statutU'];


}
