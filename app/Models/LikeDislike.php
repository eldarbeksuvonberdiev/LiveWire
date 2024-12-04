<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LikeDislike extends Model
{
    protected $fillable = [
        'post_id',
        'user_ip',
        'value'
    ];
}
