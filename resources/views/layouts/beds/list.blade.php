@extends('layouts.master')
@section('title','Danh sách giường bệnh')
@section('content')
        <h2>Danh sách giường bệnh</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>STT</th>
                <th>Số giường</th>
                <th>Loại phòng</th>
                <th>Tên bệnh nhân</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    @else
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    @endif
                    @if(empty($bed->patient->id))
                    <td>
                        <a href="{{route('beds.edit',$bed->id)}}">
                            <i class="fa fa-edit" style="font-size:24px"></i></a>
                    </td>

                    <td>
                        <a href="#" >
                            <i class="fa fa-trash-o" style="font-size:24px;color: red"></i></a>
                    </td>
                    @endif
                </tr>


            @empty
                <tr>
                    <td>Không có dữ liệu</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $beds->appends(request()->query()) }}
@endsection
