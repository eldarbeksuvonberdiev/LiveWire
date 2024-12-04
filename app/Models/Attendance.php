<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['talaba_id', 'date', 'value'];

    public function talaba() 
    {
        return $this->belongsTo(Talaba::class,'talaba_id');
    }
}
