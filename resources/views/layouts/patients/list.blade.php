@extends('layouts.master')
@section('title','danh sach phong')
@section('content')
        <h2>Danh sách bệnh nhân</h2>
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
                    @if(!empty($patient->bed->id))
                    <td>{{++$key}}</td>
                    <td id="search-img"><img src="{{asset('storage/'.$patient->image)}}"  alt="không có ảnh" width="50" height="50">
                    <td>{{$patient->name}}</td>
                    <td>{{$patient->dob}}</td>
                    <td>{{$patient->gender}}</td>
                    <td>{{$patient->date}}</td>
                    <td>{{$patient->status}}</td>
                    <td>{{$patient->bed->name}}</td>
                    <td>{{$patient->bed->room->name}}</td>
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

