<?php

namespace App\Http\Controllers;

use App\Http\Services\BedService;
use App\Http\Services\PatientService;
use App\Http\Services\RoomService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BedController extends Controller
{
    protected $bedService;
    protected $patientService;
    protected $roomService;

    public function __construct(BedService $bedService,
                                PatientService $patientService,
                                RoomService $roomService)
    {
        $this->roomService=$roomService;
        $this->bedService = $bedService;
        $this->patientService = $patientService;
    }

    public function index()
    {
        $beds = $this->bedService->getAll();
        return view('layouts.beds.list', compact('beds'));
    }
    public function create()
    {
        $rooms = $this->roomService->getAll();
        return view('layouts.beds.create',compact('rooms'));
    }
    public function store(Request $request)
    {
        $this->bedService->addBed($request);
        Session::flash('success','Thêm giường bệnh thành công');
        return redirect()->route('rooms.index');
    }
}
