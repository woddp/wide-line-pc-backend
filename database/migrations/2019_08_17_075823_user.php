<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('Users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',50)->unique()->comment("用户名");
            $table->string('nickname',50)->comment("用户昵称");
            $table->string('mobile',13)->unique()->comment("用户手机");
            $table->string('avatar',255)->comment("头像");
            $table->string('password',255)->comment("密码");
            $table->string('salt',50)->comment("盐");
            $table->string('token',250)->comment("token");
            $table->tinyInteger('status')->default(1)->comment("用户状态 1 正常 2 拉黑");
            $table->dateTime('created_at')->comment("创建时间");
            $table->dateTime('updated_at')->comment("更新时间");

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
