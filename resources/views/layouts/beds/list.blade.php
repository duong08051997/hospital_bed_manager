@extends('layouts.master')
@section('title','danh sach phong')
@section('content')

    <div class="container">
        <h2>Danh sách giường bệnh</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>số thứ tự</th>
                <th>số giường</th>
                <th>Loại phòng</th>
                <th>Tên bệnh nhân</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>Tình trạng bệnh</th>
                <th>Chú thích</th>
            </tr>
            </thead>
            <tbody>
            @forelse($beds as $key => $bed)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$bed->name}}</td>
                    <td>{{$bed->room->name}}</td>
                    <td>{{$bed->patient->name}}</td>
                    <td>{{$bed->patient->dob}}</td>
                    <td>{{$bed->patient->gender}}</td>
                    <td>{{$bed->patient->status}}</td>
                    <td>{{$bed->patient->note}}</td>
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
