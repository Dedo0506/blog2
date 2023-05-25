<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\User;
use App\Models\Categoria;

class Post extends Model
{
    use HasFactory;

    //relacion inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    //relacion 1:1 polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    //relacion 1:N polimorfica
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable' );
    }

    //relacion N:N polimorfica
    public function tags(){
        return $this->morphMany('App\Models\taggable', 'taggable');
    }
}
