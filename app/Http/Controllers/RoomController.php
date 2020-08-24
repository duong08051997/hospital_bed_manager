<?php

namespace App\Http\Controllers;

use App\Http\Services\BedService;
use App\Http\Services\PatientService;
use App\Http\Services\RoomService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    protected $bedService;
    protected $roomService;
    protected $patientService;

    public function __construct(RoomService $roomService,
                                BedService $bedService,
                                PatientService $patientService)
    {
        $this->patientService=$patientService;
        $this->roomService = $roomService;
        $this->bedService = $bedService;
    }
    public function index()
    {
        if (Auth::check()) {
            $patients = $this->patientService->getAll();
            $beds = $this->bedService->getAll();
            $rooms = $this->roomService->getAll();
            return view('layouts.rooms.list', compact('rooms', 'beds', 'patients'));
        }
        return view('login');
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
