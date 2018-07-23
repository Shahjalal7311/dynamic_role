<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body','image_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
