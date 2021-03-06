<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['title','content'];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function artistes(){
        return $this->hasManyThrough(Artiste::class,Image::class);
    }
}
