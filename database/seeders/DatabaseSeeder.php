<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //解除自带防批量数据灌输造假的警卫功能
        Model::unguard();

        //call 方法来指定要运行假数据填充的文件
        $this -> call(UsersTableSeeder::class);

        //重启警卫功能
        Model::reguard();
    }
}
