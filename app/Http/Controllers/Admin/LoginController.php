<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use function Composer\Autoload\includeFile;

class LoginController extends Controller
{
    //登录页面显示
    public function index(){
        return view('admin.login.index');
    }

    //登录处理
    public function login(LoginRequest $request){

        //调用登录处理方法
       // $result = (new User())->login($request->all());

       /* if ($result)
        {
            dump($result);
           // return redirect(route('admin.index'));
        }else{
            //返回页面设置闪存
            return \Redirect::back()->with('error','用户名或密码错误');
        }*/

       $user = Auth::attempt($request->only(['username','password']));
       if($user){
           return redirect(route('admin.index'));
       }else{
           //返回页面设置闪存
           return \Redirect::back()->with('error','用户名或密码错误');
       }

    }
}
