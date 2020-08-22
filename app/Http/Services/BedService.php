<?php


namespace App\Http\Services;


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

}
