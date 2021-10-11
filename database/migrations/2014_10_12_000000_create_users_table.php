<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *migrations 迁移，数据库迁移;
     *schema 计划，模式，方案;
     *blueprint 蓝图，设计图;
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id();//id() 是 bigIncrements() 的封装，此方法创建了一个 bigint unsigned 类型的自增长 id; (bigint 长整数类型，占八个字符; unsigned 无符号的)

            $table->string('name');//由 string 方法创建了一个 name 字段， 用于保存用户名称

            $table->string('email')->unique();//由 string 方法创建了一个 email 字段，且在最后指定该字段的值为唯一值，用于保存用户邮箱(unique 独一无二，唯一性; )

            $table->timestamp('email_verified_at')->nullable();//Email 验证时间，空的话意味着用户还未验证邮箱

            $table->string('password');//由 string 方法创建了一个 password 字段，数据库字段类型为 VARCHAR(varchar 可变字符; )

            $table->rememberToken();//由 rememberToken 方法为用户创建一个 remember_token 字段，用于保存『记住我』的相关信息。

            $table->timestamps();//由 timestamps 方法创建了一个 created_at 和一个 updated_at 字段，分别用于保存用户的创建时间和更新时间。
        });
    }

    /**
     * Reverse the migrations.
     * reverse 撤销;
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
