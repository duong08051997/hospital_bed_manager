@extends('layouts.master')
@section('title','Danh sách phòng bệnh')
@section('content')
    @if (Session::has('success'))
        <p class="text-success" style="margin-left: 10px">
            <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
        </p>
    @endif
    <a href="{{route('rooms.create')}}" class="btn btn-success" ><i class="fa fa-plus">Thêm mới
            phòng bệnh</i></a>
    <a href="{{route('beds.create')}}" class="btn btn-success" ><i class="fa fa-plus">Thêm mới
            giường bệnh</i></a>
    @foreach($patientSts as $patientSt)
        @if($patientSt->status =="Nguy kịch")
    <img src="./assets/img/red.jpg" alt="" width="15px" height="20px" style="margin-left: 30px"> Nguy kịch
    ({{$patientSt->total}} giường)
        @elseif($patientSt->status =="Nặng")
    <img src="./assets/img/orange.png" alt="" width="15px" height="20px" style="margin-left: 30px"> Nặng
    ({{$patientSt->total}} giường)
        @elseif($patientSt->status =="Ổn định")
    <img src="./assets/img/pink.jpg" alt="" width="15px" height="20px" style="margin-left: 30px"> Ổn định
    ({{$patientSt->total}} giường)
    <img src="./assets/img/green.png" alt="" width="15px" height="20px" style="margin-left: 30px"> Trống
                ({{$patient_ids[0]['total']}} giường)
    @endif
    @endforeach
    @foreach($rooms as $room)
        <div class="col-md-12" style="margin-bottom: 15px ;background-color: white">
            <div class="col-md-12">
                <div style="font-size: 20px;
                        @if($room->name =="Phòng cách ly đặc biệt") color:{{'#800000'}}
                @elseif( $room->name =="Phòng cấp cứu") color:{{'red'}}
                @elseif($room->name =="Phòng điều trị") color:{{'#FF9900'}}
                @elseif($room->name =="Phòng phục hồi chức năng") color :{{"#006600"}}
                @endif
                ">
                    {{$room->name}}</div>
                <fieldset class="">
                    <div class="row">
                        @foreach($beds as $bed)
                            @if($bed->room_id==$room->id)
                                <div class="col-md-1">
                                    <a href=" @if(empty($bed->patient->id)){{route('beds.edit',$bed->id)}} @else {{route('patients.detail',$bed->patient->id)}} @endif"
                                       class="hoverMe" data-placement="right"
                                       @if(!empty($bed->patient->id))
                                       title="
                                           Giường bệnh:{{$bed->name}}
                                           Tên bệnh nhân :{{$bed->patient->name}}
                                           Ngày sinh: {{$bed->patient->dob}}
                                           Giới tính:{{$bed->patient->gender}}
                                           Tình trạng:{{$bed->patient->status}}
                                           Ngày nhập viện:{{$bed->patient->date}}
                                       @endif
                                           ">
                                        <div>
                                            <div class="bedgreeen">
                                                <i class="fa fa-bed"
                                                   style="font-size: 60px;
                                                       color : green;
                                                   @if(!empty($bed->patient->id))
                                                   @if($bed->patient->status == "Nguy kịch") color:{{"red"}}
                                                   @elseif($bed->patient->status == "Nặng") color:{{"orange"}}
                                                   @elseif($bed->patient->status == "Ổn định") color:{{"pink"}}
                                                   @endif
                                                   @endif">
                                                </i>
                                                <div class="patientName"
                                                     style="
                                                         font-size: 20px ;color: green;
                                                     @if(!empty($bed->patient->id))
                                                     @if($bed->patient->status == "Nguy kịch") color:{{"red"}}
                                                     @elseif($bed->patient->status == "Nặng") color:{{"orange"}}
                                                     @elseif($bed->patient->status == "Ổn định") color:{{"pink"}}
                                                     @endif
                                                     @endif;
                                                         ">
                                                    {{$bed->name}}
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
