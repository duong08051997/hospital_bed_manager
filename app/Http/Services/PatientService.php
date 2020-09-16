<?php


namespace App\Http\Services;


use App\Http\Controllers\Major;
use App\Http\Repositories\PatientRepository;
use App\Patient;
use Illuminate\Support\Facades\Storage;

class PatientService
{
    protected $patientRepo;
    public function __construct(PatientRepository $patientRepo)
    {
        $this->patientRepo=$patientRepo;
    }

    public function getAll()
    {
        return $this->patientRepo->getAll();
    }
    public function getOrderBy()
    {
        return $this->patientRepo->getOrderBy();

    }
    public function addPatient($request)
    {
        $patient = new Patient();
        if ($request->hasFile('image')) {
            $image =$request->file('image');
            $path = $image->store('image','public');
            $patient->image=$path;
        }
        $patient->name =$request->name;
        $patient->dob =$request->dob;
        $patient->status_bed= Major::NO;
        $patient->gender=$request->gender;
        $patient->date =$request->date;
        $patient->status=$request->status;
        $patient->note=$request->note;
        $this->patientRepo->save($patient);
    }
    public function findId($id)
    {
        return $this->patientRepo->findId($id);

    }
    public function deletePatient($id)
    {
        $patient = $this->patientRepo->findId($id);
        $image = $patient->image;
        if ($image) {
            Storage::delete('/public/image');
            $patient->delete();
        }
    }
    public function updatePatient($request,$id)
    {
        $patient = $this->patientRepo->findId($id);
        if ($request->hasFile('image')){
            $patientImg = $patient->image;
            if ($patientImg) {
                Storage::delete('/public' . $patientImg);
            }
            $image = $request->file('image');
            $path = $image->store('image', 'public');
            $patient->image = $path;
        }
        $patient->name =$request->name;
        $patient->dob =$request->dob;
        $patient->status_bed= $request->status_bed;
        $patient->gender=$request->gender;
        $patient->date =$request->date;
        $patient->status=$request->status;
        $patient->note=$request->note;
        $this->patientRepo->save($patient);

    }
    public function search($request)
    {
        $keyword = $request->input('keyword');
        return $this->patientRepo->search($keyword);
    }
}
