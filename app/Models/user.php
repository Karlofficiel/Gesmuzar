<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{
    use HasFactory;
    
    
    protected $table = 'user';
    protected  $fillable = ['name','numero','email','password','role_id'];

    
    
    public function voitures()
    {
        return $this->hasMany(Voiture::class, 'user_id');
    }

      
    public function modepayement()
    {
        return $this->hasMany(modepayement::class, 'user_id');
    }


        public function role()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role)
    {
        return $this->role()->contains('name', $role);
    }

    public function voiture()
    {
        return $this->hasMany(voiture::class);
    }

    public function message()
    {
        return $this->hasMany(message::class);
    }

        public function hasPermission($permission)
    {
        return $this->role()->whereHas('permissions', function ($query) use ($permission) {
            $query->where('name', $permission);
        })->exists();
    }

   
}
