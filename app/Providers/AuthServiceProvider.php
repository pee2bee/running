<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

/* ( register 注册账户，登记表; guess 猜测，推测; basename 返回路径中的文件名; mappings 映射; gate 闸门，登机口，门; ) */
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        //修改策略自动发现的逻辑
        $this->registerPolicies();

        Gate::guessPolicyNamesUsing(function($modelClass){     //动态返回模型对应的策略名称，如：//'App\Models\User' => 'App\Policies\UserPolicy',
            return
            'App\Policies\\'.class_basename($modelClass).'Policy';
        });


    }
}
