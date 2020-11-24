<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return "This is Home Page";
});
Route::get('/detail/{id}',function($id){
    return "Detail Page /".$id;
});

Route::get('blog/{id}/{str}',function($id,$str){
    return "blog number is ".$id. "/".$str;
});

Route::get('internship/',array('as'=>'test',function(){
    $url_path =route('test');
    return "This URL link is ".$url_path;
}));

Route::get('home','TestController@homepage');

Route::get('/myfolder/{id}','TestController@index');

Route::get('post/{id}/{name}/{email}','TestController@post');
Route::get('postpage','TestController@postpage');
Route::get('aboutpage','TestController@aboutpage');
Route::get('product','TestController@product');
Route::get('rawinsert',function(){
    DB::insert('insert into testing(roll,name,content) value(?,?,?)',
    ['12','mgmg','Lorem ipsum dolor sit']);
});
Route::get('rawselect',function(){
    $test =DB::select('select * from testing');
    return $test;
    foreach($test as $val){
        return $val->name;
    }
});
Route::get('rawupdate',function(){
    $test=DB::update('update testing set roll="16",name="aungaung" where id=?',[1]);
    return $test;
});
Route::get('rawdelete',function(){
    $test=DB::delete('delete from testing where id=?',[1]);
    return $test;
});



