<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Talaba extends Model
{
    protected $fillable = ['name', 'order'];

    public function attendances() 
    {
        return $this->hasMany(Attendance::class,'talaba_id');
    }

    public function checks($date)
    {
        return $this->attendances()->where('date',Carbon::parse($date))->first();
    }
}
