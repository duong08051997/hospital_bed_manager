<?php

namespace App\Http\Controllers;

use App\Http\Services\BedService;
use App\Http\Services\PatientService;
use App\Http\Services\RoomService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        if (Auth::check()) {
            $patients = $this->patientService->getOrderBy();
            return view('layouts.patients.list', compact('patients'));
        }
        return view('login');
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
    public function detail($id)
    {
        $patientId = $this->patientService->findId($id);
        $beds = $this->bedService->getAll();
        $patients = $this->patientService->getAll();
        return view('layouts.patients.detail',compact('patients','beds','patientId'));
    }
    public function delete($id)
    {
        $this->patientService->deletePatient($id);
        Session::flash('success','Bệnh nhân đã xuât viện');
        return redirect()->route('rooms.index');
    }
    public function edit($id)
    {
        $patient =$this->patientService->findId($id);
        return view('layouts.patients.edit',compact('patient'));
    }
    public function update(Request $request,$id)
    {
        $this->patientService->updatePatient($request,$id);
        Session::flash('success','Chỉnh sửa thông tin bệnh nhân thành công');
        return redirect()->route('patients.index');
    }
    public function search(Request $request)
    {
        $rooms = $this->roomService->getAll();
        $beds =$this->bedService->getAll();
        $patients = $this->patientService->search($request);
        return view('layouts.patients.list', compact('patients','beds','rooms'));
    }
    public function searchById($id)
    {
        $patientId = $this->patientService->findId($id);
        return response()->json($patientId);
    }
}
