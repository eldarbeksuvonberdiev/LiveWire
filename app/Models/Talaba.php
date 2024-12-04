<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Talaba extends Model
{
    protected $fillable = ['name', 'order'];

    public function attendaces() 
    {
        return $this->hasMany(Attendance::class,'talaba_id');
    }
}
