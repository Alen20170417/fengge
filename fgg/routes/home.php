<?php

Route::get("/",function(){
    return view("index");
})->name("index");

//峰の格
Route::get("/fgg",'FggController@index')->name("fgg");
//最新案例
Route::get("/example",'ExampleController@index')->name("example");
//博客分享
Route::get("/blog",'BlogController@index')->name("blog");
//技术交流
Route::get("/commnunicate",'CommunicateController@index')->name("commnunicate");
//资料专区
Route::get("/download",'DocumentController@download')->name("download");
//峰之生活
Route::get("/life",'LifeController@index')->name("life");
//联系我
Route::get("/contact",'ContactController@index')->name("contact");

//登陆页面
Route::get("/login",'LoginController@index')->name("login");
//注册页面
Route::get("/register",'RegisterController@index')->name("register");
//登出页面
Route::get("/logout",'LoginController@logout')->name("logout");

//Yours 峰の格
Route::get("/ufgg",'FggController@index')->name("ufgg");
//技术or资料分享
Route::get("/share",'DocumentController@share')->name("share");

Route::group(['prefix'=>'center'],function(){
    //注册控制器中的路由设置
    Route::group(['prefix'=>''],function(){
        Route::post("/reg",'RegisterController@reg')->name("reg");
        Route::get("/show",'RegisterController@show')->name("show");
        Route::post("/regcheckform",'RegisterController@checkRegForm')->name("regcheckform");
        Route::get("/verifyreg/id/{id}",'RegisterController@verify')->name("verifyreg");
    });
    //登陆控制器中的路由设置
    Route::group(['prefix'=>''],function(){
        Route::post("/loginlog",'LoginController@log')->name("loginlog");
        Route::get("/show",'LoginController@show')->name("show");
        Route::match(['post','get'],"/loginmailvcode",'LoginController@mailsendVcode')->name("loginmailvcode");
    });
});



