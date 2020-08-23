@extends('layouts.master')
@section('title','Chỉnh sửa thông tin bệnh nhân')
@section('content')

    <div class="row">
        <div class="col-12">
            <h4>Chỉnh sửa thông tin bệnh nhân</h4>
        </div>
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label >Ảnh bệnh nhân: </label><br>
                    <i class='fa fa-camera-retro' style='font-size:32px'></i>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label >Họ và tên: </label>
                    <input type="text" class="form-control" name="name" value="{{$patient->name}}" required>
                </div>
                <div class="form-group">
                    <label>Ngày sinh </label>
                    <input type="date" class="form-control" name="dob" value="{{$patient->dob}}">
                </div>
                <div class="form-group">
                    <label>Giới tính: </label><br>
                    <input name="gender" type="radio" value="Nam" @if($patient->gender == "Nam") {{'checked'}} @endif  />Nam<br>
                    <input name="gender" type="radio" value="Nữ" @if($patient->gender == "Nữ") {{'checked'}} @endif />Nữ<br>
                    <input name="gender" type="radio" value="Khác" @if($patient->gender == "Khác") {{'checked'}} @endif />Khác<br>
                </div>
                <div class="form-group ">
                    <label >Ngày nhập viện:</label>
                    <input type="datetime-local" name="date" class="form-control" value="{{$patient->date}}">
                </div>
                <div class="form-group">
                    <label>Tình trạng sức khỏe: </label><br>
                    <input name="status" type="checkbox" value="Nguy kịch" @if($patient->status == "Nguy kịch") {{'checked'}} @endif />Nguy kịch<br>
                    <input name="status" type="checkbox" value="Nặng" @if($patient->status =="Nặng") {{'checked'}} @endif />Nặng<br>
                    <input name="status" type="checkbox" value="Ổn định" @if($patient->status == "Ổn định") {{'checked'}} @endif />Ổn định<br>
                </div>
                <div class="form-group">
                    <label >Chú thích: </label>
                    <textarea class="form-control" name="note" >{{$patient->note}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
@endsection
