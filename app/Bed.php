<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    const NO_PATIENT = 0;
    const HAVE_PATIENT = 1;
    public function room()
    {
        return $this->belongsTo(Room::class,'room_id','bed_id');
    }
    public function patient()
    {
        return $this->belongsToMany(Patient::class,'patient_id','bed_id');
    }
}

