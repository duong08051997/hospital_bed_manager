@extends('layouts.master')
@section('title','Thêm mới bệnh nhân')
@section('content')

<div class="row">
    <div class="col-12">
        <h4>Thêm mới bệnh nhân</h4>
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
                <input type="text" class="form-control" name="name" placeholder="Nguyễn Văn A" required>
            </div>
            <div class="form-group">
                <label>Ngày sinh </label>
                <input type="date" class="form-control" name="dob">
            </div>
            <div class="form-group">
                <label>Giới tính: </label><br>
                <input name="gender" type="radio" value="Nam" />Nam<br>
                <input name="gender" type="radio" value="Nữ" />Nữ<br>
                <input name="gender" type="radio" value="Khác" />Khác<br>
            </div>
            <div class="form-group ">
                <label >Ngày nhập viện:</label>
                <input type="datetime-local" name="date" class="form-control">
            </div>
            <div class="form-group">
                <label>Tình trạng sức khỏe: </label><br>
                <input name="status" type="checkbox" value="Nguy kịch" />Nguy kịch<br>
                <input name="status" type="checkbox" value="Nặng" />Nặng<br>
                <input name="status" type="checkbox" value="Ổn định" />Ổn định<br>
            </div>
            <div class="form-group">
                <label>Chú thích: </label>
                <textarea class="form-control" name="note" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Thêm mới</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>
    </div>
</div>
@endsection
