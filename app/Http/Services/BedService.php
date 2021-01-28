<?php


namespace App\Http\Services;


use App\Bed;
use App\Http\Repositories\BedRepository;
use App\Http\Repositories\PatientRepository;
use App\Patient;

class BedService
{
    protected $bedRepo;
    public function __construct(BedRepository $bedRepo)
    {
        $this->bedRepo=$bedRepo;
    }
    public function getAll()
    {
        return $this->bedRepo->getAll();
    }
    public function getOrderBy()
    {
        return $this->bedRepo->getOrderBy();
    }
    public function addBed($request)
    {
        $bed = new Bed();
        $bed->name = $request->name;
        $bed->room_id = $request->room_id;
        $bed->status = Bed::NO_PATIENT;
        $this->bedRepo->saveBed($bed);
    }
    public function findId($id)
    {
        return $this->bedRepo->findId($id);
    }

}
