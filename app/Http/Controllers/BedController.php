<?php

namespace App\Http\Controllers;

use App\Http\Services\BedService;
use Illuminate\Http\Request;

class BedController extends Controller
{
    protected $bedService;
    protected $patientService;
    public function __construct(BedService $bedService,)
    {
        $this->bedService=$bedService;
    }
    public function index(){


    }
}
