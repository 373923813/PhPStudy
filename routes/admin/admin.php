<?php

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){

    //登录页面显示
     Route::get('login','LoginController@index')->name('admin.login');

    //处理登录
    Route::post('login','LoginController@login')->name('admin.login');

    //主页面显示
    Route::get('index','ConsoleController@index')->name('admin.index');

    //欢迎页面显示
    Route::get('welcome','ConsoleController@welcome')->name('admin.welcome');
});

//管理员列表资源路由
Route::resource('user','Admin\UserController',['as'=>'admin']);
//角色管理资源路由
Route::resource('role','Admin\RoleController',['as'=>'admin']);
//权限管理资源路由
Route::resource('permission','Admin\PermissionController',['as'=>'admin']);

