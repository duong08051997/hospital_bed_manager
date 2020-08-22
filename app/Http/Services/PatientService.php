<?php


namespace App\Http\Services;


use App\Http\Repositories\PatientRepository;
use App\Patient;

class PatientService
{
    protected $patientRepo;
    public function __construct(PatientRepository $patientRepo)
    {
        $this->patientRepo=$patientRepo;
    }

    public function getAll()
    {
        return $this->patientRepo->getAll();
    }


}
