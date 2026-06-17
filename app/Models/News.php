<?php

namespace App\Models;

use Dom\Comment;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = [];

    #Comment Relation
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    #user class
    public function user(){
        return $this->belongsTo(User::class);
    }
}
