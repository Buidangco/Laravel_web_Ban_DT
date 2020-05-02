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
//clien

Route::group(['middleware'=>'auth'],function(){
  Route::match(['get','post'],'/Home/home',['as'=>'/Home/home','uses'=>'clien@home']);
  Route::get('/Home/{code}',['as'=>'/Home/{code}','uses'=>'clien@post_loai']);
  Route::get('/Home/chitiet/{id}',['as'=>'/Home/chitiet/{id}','uses'=>'clien@chitiet']);
  Route::get('/Home/chitietloai/{id}',['as'=>'/Home/chitietloai/{id}','uses'=>'danhsachsanpham@danhsach']);
});

Route::get('/danhsach/{price}/{code}','clien@price');
Route::get('/danhsach1/{mausac}/{code}','clien@mausac');
//chi tiết
Route::get('/save_list/{id}/{quanty}','clien@savelist');
//giỏ hàng
Route::get('/AddCart/{id}','clien@AddCart')->name('product.add');
Route::get('/DeleteItemCart/{id}','clien@DeleteItemCart')->name('xoasanpham');


Route::get('/Home/Cart/List_cart','clien@List_cart');
Route::get('/Delete_list_ItemCart/{id}','clien@DeletelistItemCart')->name('xoalistsanpham');
Route::get('/save_list_ItemCart/{id}/{quanty}','clien@savelistItemCart');

//đặt hàng
Route::post('/Home/Cart/dathang','clien@dathang');

//admin
Route::group(['middleware'=>'guest'],function(){
      Route::match(['get','post'],'login',['as'=>'login','uses'=>'login@index']);
});
	

Route::group(['middleware'=>['auth']],function(){
      Route::get('/product',['as'=>'/product','uses'=>'thongke@index']);
      Route::get('/logout',['as'=>'/logout','uses'=>'login@logout']);
      Route::match(['get','post'],'/product/add',['as'=>'/product/add','uses'=>'Home@add']);
      Route::get('/product/view/{id}',['as'=>'/product/view','uses'=>'Home@view']);
      Route::match(['get','post'],'/product/edit/{id}',['as'=>'/product/edit','uses'=>'Home@edit']);
      Route::match(['get','post'],'/product/update',['as'=>'/product/update','uses'=>'Home@update']);
      // Route::match(['get','post'],'/product/delete/{id}',['as'=>'/product/delete','uses'=>'Home@delete']);
      Route::post('/product/delete',['as'=>'/product/delete','uses'=>'Home@delete']);
      Route::post('/product/adddata',['as'=>'/product/adddata','uses'=>'Home@add_laydulieuve']);

});
 Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });


Route::group(['middleware'=>'auth'],function(){
    Route::get('/product/CTHD',['as'=>'/product/CTHD','uses'=>'Home@get_cthd']);
   Route::post('/product/CTHD',['as'=>'/product/CTHD','uses'=>'Home@post_cthd']);
   Route::post('/product/CTHD1',['as'=>'/product/CTHD1','uses'=>'Home@post_cthd_all']);
   Route::post('/product/CTHD2',['as'=>'/product/CTHD2','uses'=>'Home@post_cthd_all1']);
   Route::post('/product/CTHDadd',['as'=>'/product/CTHDadd','uses'=>'Home@post_cthd_all_add']);
});

//hóa đơn bán
Route::group(['middleware'=>'auth'],function(){
    Route::get('/product/khachhang',['as'=>'/product/khachhang','uses'=>'hoadonban@Khachhang']);
    Route::get('/product/hoadonban',['as'=>'/product/hoadonban','uses'=>'hoadonban@hoadonban']);
});

Route::get('/product/hoadonban/layma/{id}','hoadonban@hoadonban_view')->name('product.view');
Route::get('/product/hoadonban/duyet/{id}','hoadonban@hoadonban_duyet')->name('product.duyet');