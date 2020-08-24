<?php


namespace App\Http\Repositories;


use App\Bed;
use App\Patient;

class BedRepository
{
    protected $bed;
    protected $patient;
    public function __construct(Bed $bed,Patient $patient)
    {
        $this->bed=$bed;
        $this->patient=$patient;
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
    public function savePatient($patient)
    {
        $patient->save();
    }
    public function findId($id)
    {
        return $this->bed->findOrFail($id);
    }

}
