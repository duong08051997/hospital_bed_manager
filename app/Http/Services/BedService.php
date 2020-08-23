<?php


namespace App\Http\Services;


use App\Bed;
use App\Http\Repositories\BedRepository;

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


    }

}
