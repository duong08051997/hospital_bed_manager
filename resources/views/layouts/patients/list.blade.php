@extends('layouts.master')
@section('title','danh sach phong')
@section('content')

    <div class="container">
        <h2>Danh sách giường bệnh</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>số thứ tự</th>
                <th>Tên bệnh nhân</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>Ngày nhập viện</th>
                <th>Triệu chứng</th>
                <th>Số giường</th>
                <th>Tên phòng</th>
            </tr>
            </thead>
            <tbody>
            @forelse($patients as $key => $patient)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$patient->name}}</td>
                    <td>{{$patient->dob}}</td>
                    <td>{{$patient->gender}}</td>
                    <td>{{$patient->date}}</td>
                    <td>{{$patient->status}}</td>
                    <td>{{$patient->bed->name}}</td>
                    <td>{{$patient->bed->room->name}}</td>
                </tr>
            @empty
                <tr>
                    <td>Không có dữ liệu</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection

