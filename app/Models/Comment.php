<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'reply_to',
        'user_name',
        'body'
    ];

    public function replies(){
        return $this->hasMany(Comment::class,'reply_to');
    }

    public function parent(){
        return $this->belongsTo(Comment::class,'reply_to');
    }

}
