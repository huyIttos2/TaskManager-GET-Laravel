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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('customer')->group(function (){
    Route::get('/index',function (){
//        echo "Hien thi khach hang";
        return view('modules.customer.index');
    });
    Route::get('create',function (){
        echo "Hien thi form KH";
    });
    Route::post('store',function (){
        echo "Xu li du lieu kh";
    });
    Route::get('{id}/show',function (){
        echo "Hien thi thong tin chi tiet";
    });
    Route::get('{id}/edit',function (){
        echo "Hien thi form kh";
    });
    Route::get('{id}/update',function (){
        echo "Xu li du lieu Kh duoc chinh sua thong qua PATH tu form";
    });
    Route::get('{id}',function (){
        echo "Xoa thong tin du lieu KH";
    });


});
