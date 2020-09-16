@extends('layouts.master')
@section('title','Thêm bệnh nhân vào giường bệnh')
@section('content')

    <form method="post">
            <h1>Bệnh nhân xuất viện</h1>
        <a href="{{route('patients.out',$bed->id)}}">Đồng ý</a>
    </form>
@endsection
