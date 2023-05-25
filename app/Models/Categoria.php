<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Categoria extends Model
{
    use HasFactory;

    //relacion 1:N
    public function posts(){
        return $this->hasMany(Post::class, 'categoria_id', 'id');
    }
}
