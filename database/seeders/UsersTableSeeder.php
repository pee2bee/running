<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     *
     *
     *
     */
    public function run()
    {
        // 1.User::factory() 返回的是一个 UserFactory 对象。模型工厂相关的功能在 app/Models/User.php 模型类的顶部，加载了 HasFactory trait 实现的。
        // 2.count() 是由工厂类提供的 API，接受一个参数用于指定要创建的模型数量，create() 方法来将生成假用户列表数据插入到数据库中
        User::factory()->count(50)->create();

        // 3.对第一位用户的信息进行了更新，目的是方便后面我们使用此账号进行登录
        $user = User::find(1);
        $user -> name = '张三';
        $user -> email = '1234@qq.com';
        $user -> is_admin = true;
        $user -> save();

        $user = User::find(2);
        $user -> name = '李四';
        $user -> email = '12345@qq.com';
        $user -> is_admin = true;
        $user -> save();
    }
}
