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
                    @if (asset("/storage/image/{{ $patient->image }}"))
                        <img src="{{ asset("/storage/$patient->image ") }}" width="50px">
                    @else
                        <p>No image found</p>
                    @endif
                 <input type="file" name="image" value="{{ $patient->images }}"/>
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
                    <label>Đã có giường chưa?: </label><br>
                    <input name="status_bed" type="radio" id="no" value="chưa có giường bệnh" @if($patient->status_bed == \App\Http\Controllers\Major::NO) {{'checked'}} @endif  />
                    <label for="no">Chưa</label> <br>
                    <input name="status_bed" type="radio" id="yes" value="đã có giường bệnh" @if($patient->status_bed == \App\Http\Controllers\Major::YES) {{'checked'}} @endif />
                    <label for="yes">Có</label> <br>
                </div>
                <div class="form-group">
                    <label>Giới tính: </label><br>
                    <input name="gender" type="radio" value="Nam" id="nam" @if($patient->gender == "Nam") {{'checked'}} @endif  />
                    <label for="nam">Nam</label> <br>
                    <input name="gender" type="radio" value="Nữ" id="nu" @if($patient->gender == "Nữ") {{'checked'}} @endif />
                    <label for="nu">Nữ</label> <br>
                    <input name="gender" type="radio" id="khac" value="Khác" @if($patient->gender == "Khác") {{'checked'}} @endif />
                    <label for="khac">Khác</label> <br>
                </div>
                <div class="form-group ">
                    <label >Ngày nhập viện:</label>
                    <input type="datetime-local" name="date" class="form-control" value="{{$patient->getAttributeDate($patient->date) }}">
                </div>
                <div class="form-group">
                    <label>Tình trạng sức khỏe: </label><br>
                    <input name="status" type="radio" id="nguykich" value="Nguy kịch" @if($patient->status == "Nguy kịch") {{'checked'}} @endif />
                    <label for="nguykich">Nguy kịch</label> <br>
                    <input name="status" type="radio" id="nang" value="Nặng" @if($patient->status =="Nặng") {{'checked'}} @endif />
                    <label for="nang">Nặng</label> <br>
                    <input name="status" type="radio" id="ondinh" value="Ổn định" @if($patient->status == "Ổn định") {{'checked'}} @endif />
                    <label for="ondinh">Ổn định</label> <br>
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
