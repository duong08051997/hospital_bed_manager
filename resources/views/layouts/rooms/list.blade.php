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
        <div style="font-size: 20px"> {{$room->name}}</div>
        <fieldset class="">
            <div class="row">
                @foreach($beds as $bed)
                    @if($bed->room_id==$room->id)
                    <div class="col-md-1">
                        <a href=" @if(empty($bed->patient->id)){{route('beds.edit',$bed->id)}} @else {{route('patients.detail',$bed->patient->id)}} @endif" class="hover">
                            <div>
                                <div class="bedgreeen">
                                    <i class="fa fa-bed"

                                       style="font-size: 60px;
                                       @if(!empty($bed->patient->id))
                                       @if($bed->patient->status == "Nguy kịch") color : {{"red"}}
                                       @elseif($bed->patient->status == "Nặng") color : {{"orange"}}
                                       @elseif($bed->patient->status == "Ổn định") color : {{"pink"}}
                                       @elseif($bed->patient->status == "") color : {{'green'}}
                                       @endif
                                       @endif">
                                    </i>
                                    <div class="patientName"
                                         style=" color: green;
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
