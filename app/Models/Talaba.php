<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Talaba extends Model
{
    protected $fillable = ['name', 'order'];

    public function attendaces() 
    {
        return $this->hasMany(Attendance::class,'talaba_id');
    }

    public function checks($date)
    {
        return $this->attendaces()->where('date',Carbon::parse($date))->first();
    }
}
