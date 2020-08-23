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
    public function getAll()
    {
        return $this->patient->all();
    }
    public function save($patient)
    {
        $patient->save();
    }

}
