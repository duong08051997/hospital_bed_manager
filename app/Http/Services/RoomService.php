<?php
namespace App\Http\Services;
use App\Http\Repositories\RoomRepository;

class RoomService
{
    protected $roomRepo;
    public function __construct(RoomRepository $roomRepo)
    {
        $this->roomRepo=$roomRepo;
    }
    public function getAll()
    {
        return $this->roomRepo->getAll();
    }

}
