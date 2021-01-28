<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use phpDocumentor\Reflection\Types\This;

class Patient extends Model
{
    use SoftDeletes;
    public function bed()
    {
        return $this->belongsToMany(Bed::class,'bed_id','patient_id');
    }

    public function room()
    {
        return $this->belongsToMany(Room::class,'room_id','parent_id');
    }
}
