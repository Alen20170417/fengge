<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//后台管理路由配置
Route::prefix('admin')
    ->namespace('Admin')
    ->group(base_path('routes/admin.php'));

//前台管理路由配置
Route::prefix('home')
    ->namespace('Home')
    ->group(base_path('routes/home.php'));

/**
 * 公用请求url路由配置
 */
Route::get("/test",function(){
    echo 123123;
    return Redirect()->to("home/fgg");
});

Route::get("/test1",function(){
    echo 'test123123';
})->name('test1');