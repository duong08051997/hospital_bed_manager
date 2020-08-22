<?php

namespace App\Http\Controllers;

use App\Http\Services\BedService;
use App\Http\Services\RoomService;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    protected $bedService;
    protected $roomService;

    public function __construct(RoomService $roomService,
                                BedService $bedService)
    {
        $this->roomService = $roomService;
        $this->bedService=$bedService;
    }

    public function index()
    {
        $beds = $this->bedService->getAll();
        $rooms = $this->roomService->getAll();
        return view('layouts.rooms.list', compact('rooms','beds'));
    }
}
