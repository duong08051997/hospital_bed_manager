<?php

namespace App\Http\Repositories;
use App\Room;

class RoomRepository
{
    protected $room;
    public function __construct(Room $room)
    {
        $this->room=$room;
    }
    public function getAll()
    {
        return $this->room->all();
    }
    public function save($room)
    {
        $room->save();
    }

}
