<?php

namespace App\Http\Controllers;

use App\Http\Services\BedService;
use App\Http\Services\PatientService;
use Illuminate\Http\Request;

class BedController extends Controller
{
    protected $bedService;
    protected $patientService;

    public function __construct(BedService $bedService,
                                PatientService $patientService)
    {
        $this->bedService = $bedService;
        $this->patientService=$patientService;
    }

    public function index()
    {
        $beds = $this->bedService->getAll();
        $patients = $this->patientService->getAll();
        return view('layouts.beds.list',compact('beds','patients'));
    }
}
