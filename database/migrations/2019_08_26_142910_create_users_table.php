<?php
/*
 * 用户表
 * */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username',50)->default('')->comment('用户名');
            $table->string('password',255)->default('')->comment('密码');
            $table->string('avator',255)->default('')->comment('头像');
            $table->string('email',255)->default('')->comment('邮箱');
            $table->string('phone',20)->default('')->comment('手机号');
            $table->string('openid',255)->default('')->comment('openid');
            $table->timestamps();
            #软删除标识
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
