<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Helpers\MyValidator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        /*注册自定义验证类*/
        /* Validator::resolver(function($translator, $data, $rules, $messages){
            return new SalonValidator($translator, $data, $rules, $messages);
        }); */
        $this->app['validator']->resolver(function ($translator, $data, $rules, $messages){
            return new MyValidator($translator, $data, $rules, $messages);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
