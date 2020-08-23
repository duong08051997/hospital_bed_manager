<?php

namespace App\Http\Controllers;

use App\Http\Services\BedService;
use App\Http\Services\PatientService;
use App\Http\Services\RoomService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PatientController extends Controller
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
        $patients = $this->patientService->getAll();
        return view('layouts.patients.list',compact('patients'));
    }
    public function create()
    {
        $patients =$this->patientService->getAll();
        $rooms = $this->roomService->getAll();
        $beds =$this->bedService->getAll();
        return view('layouts.patients.create',compact('rooms','beds','patients'));
    }
    public function store(Request $request)
    {
        $this->patientService->addPatient($request);
        Session::flash('success','Thêm mới bệnh nhân thành công');
        return redirect()->route('rooms.index');
    }
}
