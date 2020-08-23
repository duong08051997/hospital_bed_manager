@extends('layouts.master')
@section('title','danh sach phong')
@section('content')
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
                <th>Ngày nhập viện</th>
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
                    @if(!empty($bed->patient->id))
                    <td>{{$bed->patient->name}}</td>
                    <td>{{$bed->patient->dob}}</td>
                    <td>{{$bed->patient->gender}}</td>
                    <td>{{$bed->patient->date}}</td>
                    <td>{{$bed->patient->status}}</td>
                    <td>{{$bed->patient->note}}</td>
                    @else
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    @endif
                </tr>

            @empty
                <tr>
                    <td>Không có dữ liệu</td>
                </tr>
            @endforelse
            </tbody>
        </table>

@endsection
