<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use App\Models\User;
class Comment extends Model
{
    use HasFactory;

     //Relacion 1:N inversa
     public function user(){
        return $this->belongsTo(User::class);
    }

    public function commentable(){
        return $this->morphTo();
    }
}
