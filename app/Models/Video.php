<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use comments;

class Video extends Model
{
    use HasFactory;

    //Relacion 1:N inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relacion 1:N polimorfica
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable' );
    }

    //relacion N:N polimorfica
    public function tags(){
        return $this->morphMany('App\Models\taggable', 'taggable');
    }
}
