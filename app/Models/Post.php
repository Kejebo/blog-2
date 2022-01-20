<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relacion muchos a muchos
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relacion
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}

