@extends('layouts.master')
@section('title','Thêm bệnh nhân vào giường bệnh')
@section('content')

    <a href="{{route('patients.create')}}" class="btn btn-success" style="color: black"><i class="fa fa-plus">Thêm mới bệnh nhân</i></a>
    <div class="row">
        <div class="col-12">
            <h4>Thêm bệnh nhân vào giường bệnh</h4>
        </div>
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Họ và tên: </label>
                    <select class="form-control" name="patient_id">
                        @foreach($patients as $patient)
                            <option
                                value="{{$patient->id}}">{{$patient->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
@endsection

