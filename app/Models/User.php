<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Hash;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\User
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @mixin \Eloquent
 */
use Illuminate\Foundation\Auth\User as AuthUser;
class User extends AuthUser
{
    //设置软删除
    use SoftDeletes;
    protected $dates =['deleted_at'];

    //设置黑名单
    protected $guarded =[];




    public function login(array $data)
    {

      $info = self::where('username',$data['username'])->first();
      self::dump($info);
     /* //判断用户名不存在
      if (!$info)
      {
          return false;
      }
      //判断密码不存在
        if (!Hash::check($data['password'],$info->password))
        {
            return false;
        }
        //写入session
        session(['admin.user'=>$info]);
        return true;*/
    }

    //


}
