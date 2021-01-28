<?php


namespace App\Http\Repositories;


use App\Bed;
use App\Patient;

class BedRepository
{
    protected $bed;
    public function __construct(Bed $bed)
    {
        $this->bed=$bed;
    }
    public function getOrderBy()
    {
        return $this->bed->orderBy('name', 'ASC')->paginate(8);
    }
    public function getAll()
    {
        return $this->bed->all();

    }
    public function saveBed($bed)
    {
        $bed->save();
    }
    public function findId($id)
    {
        return $this->bed->findOrFail($id);
    }

}
