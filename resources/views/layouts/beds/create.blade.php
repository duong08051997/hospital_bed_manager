@extends('layouts.master')
@section('title','Thêm mới giường bệnh')
@section('content')

    <div class="row">
        <div class="col-12">
            <h4>Thêm mới giường bệnh</h4>
        </div>
        <div class="col-12">
            <form method="post" >
                @csrf
                <div class="form-group">
                    <label>Tên giường bệnh</label>
                    <input type="text" class="form-control" name="name"  placeholder="Tên giường bệnh" required>
                </div>
                <div class="form-group">
                    <label>Tên phòng bệnh</label>
                    <select class="form-control" name="room_id">
                        @foreach($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
@endsection

