@if($errors->any())
    <div class="Huialert Huialert-error"><i class="Hui-iconfont">&#xe6a6;</i>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>

@endif

@if(session()->has('error'))
    <div class="Huialert Huialert-error"><i class="Hui-iconfont">&#xe6a6;</i>
            <li>{{session()->get('error')}}</li>
    </div>
@endif
