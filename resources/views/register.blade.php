<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css-v2/register.css')}}">
    <title>Đăng kí</title>
    @toastr_css
</head>
<body>
<div class="container">
    <div class="title m-b-md">
        Đăng kí
    </div>

    <div class="form-login">
        <form class="text-left" action="{{route('users.register')}}" method="post">
            @csrf
            @if($errors->all())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error! </strong> Đăng kí không thành công!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    @endif
                </div>
                @if (Session::has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Lỗi! </strong> Đăng kí không thành công!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            <div class="form-group">
                <label for="inputUsername">Tên người dùng</label>
                <input type="text"
                       class="form-control"
                       id="inputUsername"
                       name="username"
                       placeholder="Bùi Xuân Dưỡng"
                      value="{{old('username')}}" >
                @if($errors->has('username'))
                    <p class="text-danger">{{$errors->first('username')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="inputUsername">Email người dùng</label>
                <input type="email"
                       class="form-control"
                       id="inputUsername"
                       name="email"
                       placeholder="exam@gmail.com"
                       value="{{old('email')}}"
                       >
                @if (Session::has('error'))
                    <p class="text-danger">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('error') }}
                    </p>
                @endif
                @if($errors->has('email'))
                    <p class="text-danger">{{$errors->first('email')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="inputPassword">Mật khẩu</label>
                <input type="password"
                       class="form-control"
                       id="inputPassword"
                       name="password"
                       placeholder="Mật khẩu"
                       >
                @if($errors->has('password'))
                    <p class="text-danger">{{$errors->first('password')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="inputPassword1">Nhập lại mật khẩu</label>
                <input type="password"
                       class="form-control"
                       id="inputPassword1"
                       name="password_confirmation"
                       placeholder="Mật khẩu"
                       >
            </div>
            <button type="submit" class="btn btn-success" id="register" name="register">Đăng kí</button>
                <a href="{{route('login')}}" class="btn btn-primary">Đăng nhập</a>
        </form>
    </div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
@jquery
@toastr_js
@toastr_render
</html>

