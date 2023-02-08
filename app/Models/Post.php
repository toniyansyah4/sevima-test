<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function like()
    {
        return $this->hasMany('App\Models\Like');
    }
}
