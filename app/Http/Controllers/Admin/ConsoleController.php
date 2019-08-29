<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConsoleController extends Controller
{
    //控制台页面显示
    public function index(){
        return view('admin.admin.index');
    }

    //欢迎页面显示
    public function welcome(){
        return view('admin.admin.welcome');
    }
}
