<?php


namespace App\Http\Services;


use App\Bed;
use App\Http\Repositories\BedRepository;
use App\Http\Repositories\PatientRepository;
use App\Patient;

class BedService
{
    protected $bedRepo;
    protected $patientRepo;
    public function __construct(BedRepository $bedRepo,PatientRepository $patientRepo)
    {
        $this->bedRepo=$bedRepo;
        $this->patientRepo=$patientRepo;
    }
    public function getAll()
    {
        return $this->bedRepo->getAll();
    }
    public function addBed($request)
    {
        $bed = new Bed();
        $bed->name = $request->name;
        $bed->room_id = $request->room_id;
        $this->bedRepo->save($bed);
    }
    public function findId($id)
    {
        return $this->bedRepo->findId($id);
    }
    public function updateBed($request ,$id)
    {
        $bed = $this->bedRepo->findId($id);
        $bed->patient_id = $request->patient_id;
        $this->bedRepo->saveBed($bed);
    }

}
