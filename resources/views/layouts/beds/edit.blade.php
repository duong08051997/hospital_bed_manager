@extends('layouts.master')
@section('title','Thêm bệnh nhân vào giường bệnh')
@section('content')

    <a href="{{route('patients.create')}}" class="btn btn-success" style="color: black"><i class="fa fa-plus">Thêm mới
            bệnh nhân</i></a>
    <div class="row">
        <div class="col-12">
            <h4>Thêm bệnh nhân vào giường bệnh</h4>
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">

                    <label>Họ và tên: </label>
                    <select class="form-control" name="patient_id" id="select-patient" style="width: 220px">
                        <option value="">Chọn bệnh nhân</option>
                        @foreach($patients as $patient)
                            @if($patient->status_bed == \App\Http\Controllers\Major::NO)
                          <option value="{{$patient->id}}">
                              {{$patient->name}}
                            </option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
            <div class="col-12 pt-3">
                <div id="patient-detail" style="background-color: white "></div>
            </div>
        </div>


@endsection

