<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function bed()
    {
        return $this->hasMany(Bed::class,'bed_id','room_id');
    }
    public function patient(){
        return $this->belongsTo(Patient::class,'patient_id','room_id');
    }
}
