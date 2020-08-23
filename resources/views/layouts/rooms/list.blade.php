@extends('layouts.master')
@section('title','Danh sách phòng bệnh')
@section('content')
    @if (Session::has('success'))
        <p class="text-success" style="margin-left: 10px">
            <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
        </p>
    @endif
    <a href="{{route('rooms.create')}}" class="btn btn-success"><i class="fa fa-plus">Thêm mới phòng bệnh</i></a>
    <a href="{{route('beds.create')}}" class="btn btn-success"><i class="fa fa-plus">Thêm mới giường bệnh</i></a>
    @foreach($rooms as $room)
    <div class="col-md-12" style="margin-bottom: 15px ;background-color: white">
    <div class="col-md-12" >
        <div style="font-size: 20px"> {{$room->name}} ({{$room->price }}VNĐ/ngày)</div>
        <fieldset class="">
            <div class="row">
                @foreach($beds as $bed)
                    @if($bed->room_id==$room->id)
                    <div class="col-md-1">
                        <a href="" class="hover">
                            <div>
                                <div class="bedgreeen">
                                    <i class="fa fa-bed"
                                       style="font-size: 60px; @if(!empty($bed->patient->id)) color : {{"red"}} @else color : green @endif">
                                    </i>
                                    <div class="patientName"
                                         style="@if(!empty($bed->patient->name)) color : {{"red"}} @else color: green @endif;
                                             font-size: 20px ">
                                        @if(!empty($bed->patient->id)){{$bed->patient->name}} @else {{$bed->name}} @endif
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
            @endif
                @endforeach
            </div>
        </fieldset>
    </div>
    </div>
    @endforeach
@endsection
