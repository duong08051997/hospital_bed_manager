<?php


namespace App\Http\Repositories;


use App\Patient;

class PatientRepository
{
    protected $patient;
    public function __construct(Patient $patient)
    {
        $this->patient=$patient;
    }
    public function getOrderBy()
    {
        return $this->patient->orderBy('id', 'DESC')->paginate(6);
    }
    public function getAll()
    {
        return $this->patient->all();
    }
    public function save($patient)
    {
        $patient->save();
    }
    public function findId($id)
    {
        return $this->patient->findOrFail($id);
    }
    public function search($keyword)
    {
        return $this->patient->where('name', 'LIKE', '%' . $keyword . '%')->paginate(8);
    }

}
