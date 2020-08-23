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
    public function addPatient($request)
    {
        $patient = new Patient();
        if ($request->hasFile('image')) {
            $image =$request->file('image');
            $path = $image->store('image','public');
            $patient->image=$path;
        }
        $patient->name =$request->name;
        $patient->dob =$request->dob;
        $patient->gender=$request->gender;
        $patient->date =$request->date;
        $patient->status=$request->status;
        $patient->note=$request->note;
        $this->patientRepo->save($patient);
    }

}
