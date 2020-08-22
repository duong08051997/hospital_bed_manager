<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function bed()
    {
        return $this->hasOne('App\Bed');
    }
}
