<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

class Permiso extends Model
{
    use HasFactory;

    //relacion N:N
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}
