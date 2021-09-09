<?php


namespace Builder\Providers;

use Builder\Services\BuilderService;
use Illuminate\Support\ServiceProvider;

class BuilderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__.'/Config/builder.php' => config_path('builder.php'), // 发布配置文件到 laravel 的config 下
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('BuilderService', function ($app){
            return $app[BuilderService::class];
        });
    }
}
