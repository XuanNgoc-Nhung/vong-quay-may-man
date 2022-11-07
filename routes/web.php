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

Route::get('/logout', 'MyLoginController@logOut')->name("logOut");
Route::get('/login', 'MyLoginController@getLogin')->name("getLogin");
Route::post('/login', 'MyLoginController@postLogin')->name("postLogin");
Route::get('/register', 'MyLoginController@getRegister')->name("getRegister");
Route::post('/register', 'MyLoginController@postRegister')->name("postRegister");
Route::post('/them-moi-phan-thuong', 'HomeController@themMoiPhanThuong');
Route::post('/xoa-phan-thuong', 'HomeController@xoaPhanThuong');
Route::prefix('admin')->group(function () {
    Route::get('/', 'HomeController@getHome')->name("admin.getHome");
    Route::get('/quan-ly', 'HomeController@quanLyPhanThuong')->name("admin.quanLyPhanThuong");
    Route::get('/lich-su', 'HomeController@lichSuQuay')->name("admin.lichSu");
    Route::post('/danh-sach-trung-qua', 'HomeController@danhSachTrungQua')->name("admin.danhSachTrungQua");
    Route::post('/danh-sach-qua', 'HomeController@danhSachQua')->name("admin.danhSachQua");
    Route::post('/danh-sach-qua', 'HomeController@danhSachQua')->name("admin.danhSachQua");
});

