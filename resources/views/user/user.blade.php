<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
    <title>添加用户</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.css">
</head>
<body>

    <div class="container">
        @if($errors->any()>0)
        {{--    错误提示    --}}
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
           <ul>
               @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
               @endforeach
           </ul>
        </div>
        @endif
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">添加用户</h3>
            </div>
            <div class="panel-body">

                <form action="{{route('user.add')}}" method="post" role="form">
{{--                     {{csrf_token()}}--}}
{{--                     进行csrf验证--}}
                    {{csrf_field()}}


                    账号：<input type="text" name="username" id="user" value="{{old('username')}}"><br>
                    密码：<input type="text" name="pwd" id="pwd"><br>
                    确认密码：<input type="text" name="pwd_confirmation" id="repwd"><br>
                    邮箱：<input type="text" name="email" id="email" value="{{old('email')}}"><br>
                    <div class="form-group">
                       <div class="col-sm-10">

                           <button type="submit" class="btn btn-primary">添加用户</button>
                       </div>
                    </div>
                </form>



            </div>
        </div>
    </div>

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.js"></script>
</body>
</html>
