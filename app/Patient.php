<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    public function bed()
    {
        return $this->hasOne('App\Bed');
    }
    use SoftDeletes;
    protected $dates =['deleted_at'];
}
