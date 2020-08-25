@extends('layouts.master')
@section('title','Thêm mới phòng bệnh')
@section('content')

<div class="row">
    <div class="col-12">
        <h4>Thêm mới phòng bệnh</h4>
    </div>
    <div class="col-12">
        <form method="post" >
            @csrf
            <div class="form-group">
                <label>Tên phòng bệnh</label>
                <input type="text" class="form-control" name="name"  placeholder="Tên phòng bệnh" required>
            </div>
{{--            <div class="form-group">--}}
{{--                <label>Giá phòng bệnh</label>--}}
{{--                <input type="number" class="form-control" name="price"  placeholder="giá tiền" required>--}}
{{--            </div>--}}
            <button type="submit" class="btn btn-primary">Thêm mới</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>
    </div>
</div>
@endsection
