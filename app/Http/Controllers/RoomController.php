<?php

namespace App\Http\Controllers;

use App\Bed;
use App\Http\Services\BedService;
use App\Http\Services\PatientService;
use App\Http\Services\RoomService;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    protected $roomService;

    public function __construct(RoomService $roomService)
    {
        $this->roomService = $roomService;
    }
    public function index()
    {
            $rooms = $this->roomService->getAll();
            return view('layouts.rooms.list',compact('rooms'));
    }
    public function create()
    {
        return view('layouts.rooms.create');
    }
    public function store(Request $request)
    {
        $this->roomService->addRoom($request);
        Session::flash('success','Thêm mới phòng bệnh thành công');
        return redirect()->route('rooms.index');

    }
}
