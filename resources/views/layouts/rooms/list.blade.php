@extends('layouts.master')
@section('title','Danh sách phòng bệnh')
@section('content')
    <div class="col-md-12" style="margin-bottom: 15px ;background-color: white">
    <div class="col-md-12" >
        @foreach($rooms as $room)
        @endforeach
        <div style="font-size: 20px"> {{$rooms[0]['name']}}</div>
        <fieldset class="">
            <div class="row">
                @foreach($beds as $bed)
                    <div class="col-md-1">
                        <a href="" class="hover">
                            <div>
                                <div class="bedgreeen">
                                    <i class="fa fa-bed"
                                       style="font-size: 60px; @if(!empty($bed->patient->name)) color : {{"red"}} @else color: green @endif">
                                    </i>
                                    <div class="patientName"
                                         style="@if(!empty($bed->patient->name)) color : {{"red"}} @else color: green @endif;
                                             font-size: 20px ">
                                        {{$bed->patient->name}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="col-md-1">
                    <a href="#">
                        <div>
                            <div class="bedgreeen">
                                <i class="fa fa-bed"
                                   style="font-size: 60px; @if(empty($bed->patient->name)) color : {{"red"}} @else color: green @endif">
                                </i>
                                <div class="patientName"
                                     style="@if(empty($bed->patient->name)) color : {{"red"}} @else color: green @endif;
                                         font-size: 20px ">
                                    @if(empty($bed->patient->name)){{$bed->patient->name}} @else 103 @endif
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-1">
                    <a href="#">
                        <div>
                            <div class="bedgreeen">
                                <i class="fa fa-bed"
                                   style="font-size: 60px; @if(empty($bed->patient->name)) color : {{"red"}} @else color: green @endif">
                                </i>
                                <div class="patientName"
                                     style="@if(empty($bed->patient->name)) color : {{"red"}} @else color: green @endif;
                                         font-size: 20px ">
                                    @if(empty($bed->patient->name)){{$bed->patient->name}} @else 104 @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-1">
                    <a href="#">
                        <div>
                            <div class="bedgreeen">
                                <i class="fa fa-bed"
                                   style="font-size: 60px; @if(empty($bed->patient->name)) color : {{"red"}} @else color: green @endif">
                                </i>
                                <div class="patientName"
                                     style="@if(empty($bed->patient->name)) color : {{"red"}} @else color: green @endif;
                                         font-size: 20px ">
                                    @if(empty($bed->patient->name)){{$bed->patient->name}} @else 105 @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </fieldset>
    </div>
    </div>
    <div class="col-md-12" style="margin-bottom: 15px ;background-color: white">
    <div class="col-md-12" style="font-size: 20px">
    <div> {{$rooms[1]['name']}}</div>
        <fieldset class="" style=" ">
            <div class="row">
                <div class="col-md-1">
                    <a href="#">
                        <div>
                            <div class="bedgreeen">
                                <i class="fa fa-bed"
                                   style="font-size: 60px; @if(empty($bed->patient->name)) color : {{"red"}} @else color: green @endif">
                                </i>
                                <div class="patientName"
                                     style="@if(empty($bed->patient->name)) color : {{"red"}} @else color: green @endif;
                                         font-size: 20px ">
                                    @if(empty($bed->patient->name)){{$bed->patient->name}} @else 101 @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-1">
                    <a href="#">
                        <div>
                            <div class="bedgreeen">
                                <i class="fa fa-bed" style="font-size: 60px ;color: green">
                                </i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-1">
                    <a href="#">
                        <div>
                            <div class="bedgreeen">
                                <i class="fa fa-bed" style="font-size: 60px ;color: green">
                                </i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-1">
                    <a href="#">
                        <div>
                            <div class="bedgreen">
                                <i class="fa fa-bed" style="font-size: 60px ;color: green">
                                </i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </fieldset>
    </div>
    </div>

@endsection
