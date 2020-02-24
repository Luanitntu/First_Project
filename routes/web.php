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


//----------------PAGES--------------------
Route::get('/','pagesControll@index')->name('trangchu');
Route::get('room','pagesControll@room');
Route::get('about', 'pagesControll@abouts');
Route::get('gallery','pagesControll@gallery');

//login
Route::get('dangnhap', 'LoginController@dangnhap');
Route::post('login','LoginController@login')->name('login');
Route::get('database','LoginController@database')->name('database');
Route::get('dataphong','LoginController@dataphong')->name('dataphong');
Route::get('form', 'LoginController@form')->name('form');

//them phong
Route::post('themphong', 'LoginController@themphong')->name('themphong');

//khach hang dang ki
Route::post('themkhachhang', 'khachhangControll@khachhangdk')->name('themkhachhang');
// nhan vien
Route::get('datanhanvien','LoginController@datanhanvien')->name('datanhanvien');
Route::get('nhanvien/{id}', 'nhanvienControll@getnhanvien')->name('nhanvien');
Route::post('suanhanvien/{id}', 'nhanvienControll@suanhanvien')->name('suanhanvien');
// rooms
Route::get('rooms','roomControll@phong');
Route::get('chitietphong/{id}','roomControll@getchitiet')->name('chitietphong');
Route::get('dangki/{id}','roomControll@dangkiphong')->name('dangki');
