@extends('layouts.master')
@section('title','Bệnh nhân xuất viện')
@section('content')

    <form method="post" action="{{route('beds.index')}}">
            <h1>Bệnh nhân xuất viện</h1>
        <a class="btn btn-success" href="{{route('patients.out',$bed->id)}}">Đồng ý</a>
    </form>
@endsection
