@extends('layouts.master')
@section('title','Chi tiết bệnh nhân')
@section('content')

<div class="container" >

    <div class="pt-3"></div>
    <div class="row" >
        <div class=" col-sm-6 " id="detail">
            <table class="table "  >
                <thead class=" ">
                @foreach($patients as $patient)
                    @if($patientId->id == $patient->id )
                        <a href="{{route('patients.edit',$patient->id)}}" class="btn btn-primary">Chỉnh sửa</a>
                <tr>
                    <td style="border: none"> <img  src="{{asset('storage/'.$patient->image)}}" width="150" height="150"  class="rounded-circle" alt=""> </td>
                </tr>
                <tr>
                    <td style="border: none "> <b>Họ và tên</b> {{$patient->name}} </td>
                </tr>
                <tr>
                    <td style="border: none"> <b>Ngày sinh:</b> {{$patient->dob}} </td>
                </tr>
                <tr>
                    <td style="border: none"> <b>Giới tính:</b> {{$patient->gender}} </td>
                </tr>
                <tr>
                    <td style="border: none"> <b>Ngày nhập viện:</b> {{$patient->date}}</td>
                </tr>
                <tr>
                    <td style="border: none"> <b>Tình trạng sức khỏe:</b>{{$patient->status}}  </td>
                </tr>
                <tr>
                    <td style="border: none"> <b>Ghi chú:</b> {{$patient->note}} </td>
                </tr>
                </thead>
            </table>
            <a href="{{route('patients.delete',$patient->id)}}" class="btn btn-success" >Xuất viện</a>
            <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">Quay lại</button>
        </div>
        <div class="pt-3"></div>
        <div class=" col-sm-6 " id="detail">
            <table class="table table-hover " style="margin-top: 200px">
                <thead >
                <tr>
                    <th>Phòng bệnh</th>
                    <th>Giường bệnh</th>
                </tr>

                <tr>
                    <td style="border: none">{{$patient->bed->room->name}}</td>
                    <td style="border: none">{{$patient->bed->name}}</td>
                </tr>
                </thead>

            </table>
            @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
