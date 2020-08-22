@extends('layouts.master')
@section('title','Danh sách phòng bệnh')
@section('content')


    <div class="col-md-12" style="background-color: whitesmoke">
        @forelse($rooms as $room)
            {{$room->name}}
        @empty
            no data
        @endforelse

        <fieldset class="" >
            <div class="row" >
                @foreach($beds as $bed)
                <div class="col-md-1" >
                    <a href="#">
                        <div >
                            <div class="bedgreeen">
                                <i class="fa fa-bed" style="font-size: 60px; @if(!empty($bed->name)) color : {{"red"}} @else color: green @endif">
                                </i>
                                <div class="patientName" style="@if(!empty($bed->name)) color : {{"red"}} @else color: green @endif;font-size: 20px " > {{$bed->name}}</div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="col-md-1">
                    <a href="#">
                        <div >
                            <div class="bedgreeen" >
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

    <div class="col-md-12">
        <fieldset class="" style=" ">
            <div class="row">
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
                        <div >
                            <div class="bedgreeen" >
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
@endsection
