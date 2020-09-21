<?php

namespace App\Http\Controllers;

use App\Http\Services\BedService;
use App\Http\Services\PatientService;
use App\Http\Services\RoomService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        if (Auth::check()) {
            $beds = $this->bedService->getOrderBy();
            return view('layouts.beds.list', compact('beds'));
        }
        return view('login');
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
    public function edit()
    {
        $patients = $this->patientService->getAll();
        $beds = $this->bedService->getAll();
        return  view('layouts.beds.edit',compact('beds','patients'));
    }
    public function update(Request $request,$id)
    {
        $beds = $this->bedService->findId($id);
        $this->bedService->updateBed($request,$id);
        return redirect()->route('rooms.index',compact('beds'));
    }
    public function formOut($id)
    {
        $bed = $this->bedService->findId($id);
//        $this->bedService->patientOut($id);
        return view('layouts.beds.formOut',compact('bed'));
//        Session::flash('success','Bệnh nhân đã xuất viện !');
//        return redirect()->route('rooms.index',compact('bed'));
    }
    public function patientOut($id)
    {
//        $beds = $this->bedService->findId($id);
        $this->bedService->patientOut($id);
        Session::flash('success','Bệnh nhân đã xuất viện !');
        return redirect()->route('rooms.index');
    }

}
