<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class Patient extends Model
{
    use SoftDeletes;
    public function bed()
    {
        return $this->hasOne('App\Bed');
    }

    protected $dates =['deleted_at','bob'];

    public function getAttributeDate($value)
    {
        return  Carbon::parse($value)->format('Y-m-d\Th:m:s');
    }
}
