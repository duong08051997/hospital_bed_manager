@extends('layouts.master')
@section('title','Danh sách bệnh nhân')
@section('content')
    @if (Session::has('success'))
        <p class="text-success" style="margin-left: 10px">
            <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
        </p>
    @endif
        <h2>Danh sách bệnh nhân</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>STT</th>
                <th>Ảnh bệnh nhân</th>
                <th>Tên bệnh nhân</th>
                <th>Ngày nhập viện</th>
                <th>Số giường</th>
                <th>Tên phòng</th>
            </tr>
            </thead>
            <tbody>
            @forelse($patients as $key => $patient)
                <tr>
                    <td>{{++$key}}</td>
                    <td><img src="{{asset('storage/'.$patient->image)}}"  alt="không có ảnh" width="50" height="50">
                    <td><a href="{{route('patients.detail',$patient->id)}}" style="color: black">{{$patient->name}}</a></td>
                    <td>{{$patient->date}}</td>
                    @if(!empty($patient->bed->id))
                    <td>{{$patient->bed->name}}</td>
                    <td>{{$patient->bed->room->name}}</td>
                    @else
                        <td></td>
                        <td></td>
                    @endif
                        <td>
                            <a href="{{route('patients.edit',$patient->id)}}">
                                <i class="fa fa-edit" style="font-size:24px"></i></a>
                        </td>
                        <td>
                            <a href="{{route('patients.delete',$patient->id)}}" >
                                <i class="fa fa-trash-o" style="font-size:24px;color: red"></i></a>
                        </td>

                </tr>
            @empty
                <tr>
                    <td>Không có dữ liệu</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $patients->appends(request()->query()) }}
@endsection

