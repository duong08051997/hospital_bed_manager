@extends('layouts.master')
@section('title','Bệnh nhân xuất viện')
@section('content')

    <form method="post" action="{{route('patients.out',$bed->id)}} ">
        @csrf
            <h1>Bệnh nhân xuất viện</h1>
        <button class="btn btn-success" >Đồng ý</button>
    </form>
@endsection
