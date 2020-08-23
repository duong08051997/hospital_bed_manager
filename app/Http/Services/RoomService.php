<?php
namespace App\Http\Services;
use App\Http\Repositories\RoomRepository;
use App\Room;

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
    public function addRoom($request)
    {
        $room = new Room();
        $room->name = $request->name;
        $room->price =$request->price;
        $this->roomRepo->save($room);
    }

}
