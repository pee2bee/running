<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //设置启用Bootstrap,这是使用 render() 方法的前提条件，要不然会页面错乱
        \Illuminate\Pagination\paginator::useBootstrap();
    }
}
