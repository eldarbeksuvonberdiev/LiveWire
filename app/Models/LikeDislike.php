<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LikeDislike extends Model
{
    protected $fillable = [
        'user_ip',
        'value'
    ];
}
