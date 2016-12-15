<?php
//回调函数模式
Route::get('test',function(){
    return 'hello function';
});
//
//Route::get('test/index','TestController@index')->name('testname');

Route::get('welcome',['as'=>'test.welcome','uses'=>'TestController@index']);
