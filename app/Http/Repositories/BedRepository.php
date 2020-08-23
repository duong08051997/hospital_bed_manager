<?php


namespace App\Http\Repositories;


use App\Bed;

class BedRepository
{
    protected $bed;
    public function __construct(Bed $bed)
    {
        $this->bed=$bed;
    }
    public function getAll()
    {
        return $this->bed->all();
    }
    public function save($bed)
    {
        $bed->save();
    }
    public function findId($id)
    {
        return $this->bed->findOrFail($id);
    }

}
