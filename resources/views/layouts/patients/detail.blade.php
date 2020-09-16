@extends('layouts.master')
@section('title','Chi tiết bệnh nhân')
@section('content')
    <a href="{{route('patients.edit',$patientId->id)}}" class="btn btn-primary">Chỉnh sửa</a>
        <div class="pt-3"></div>
        <div class="row">
            <div class=" col-sm-3 " id="detail">
                <table class="table ">
                    <thead class=" ">
                    @foreach($patients as $patient)
                        @if($patientId->id == $patient->id )
                            <tr>
                                <td style="border: none"><img src="{{asset('storage/'.$patient->image)}}" width="170"
                                                              height="170" class="rounded-circle" alt=""></td>
                            </tr>
                    </thead>
                </table>
                <a href="{{route('patients.formOut',$patient->bed->id)}}" class="btn btn-success">Xuất viện</a>
                <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">Quay lại</button>
            </div>
            <div class="row">
                <div class=" col-sm-12 " id="detail">
                    <table class="table ">
                        <thead class=" ">
                        <tr>
                            <td style="border: none "><b>Họ và tên: </b> {{$patient->name}} </td>
                        </tr>
                        <tr>
                            <td style="border: none"><b>Ngày sinh: </b> {{$patient->dob}} </td>
                        </tr>
                        <tr>
                            <td style="border: none"><b>Giới tính: </b> {{$patient->gender}} </td>
                        </tr>
                        <tr>
                            <td style="border: none"><b>Ngày nhập viện: </b> {{$patient->date}}</td>
                        </tr>
                        <tr>
                            <td style="border: none"><b>Tình trạng sức khỏe: </b>{{$patient->status}}  </td>
                        </tr>
                        <tr>
                            <td style="border: none"><b>Ghi chú: </b> {{$patient->note}} </td>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="pt-3"></div>
                <div class=" col-sm-12 " id="detail">
                    <table class="table table-hover " >
                        <thead>
                        <tr>
                            <td style="border: none"><b>Phòng bệnh: </b>{{$patient->bed->room->name}}</td>
                        </tr>
                        <tr>
                            <td style="border: none"><b>Giường bệnh: </b>{{$patient->bed->name}}</td>
                        </tr>
                        </thead>

                    </table>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
@endsection
