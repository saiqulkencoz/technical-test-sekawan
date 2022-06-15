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
    return redirect('/login');
});
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin')->name('postlogin');
Route::get('/logout','AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/kendaraan','KendaraanController@index')->name('data-kendaraan');
    

    Route::get('/kendaraan','KendaraanController@index')->name('data-kendaraan');
    Route::post('/kendaraan/create','KendaraanController@create')->name('add-kendaraan');
    Route::get('/kendaraan/{id}/edit','KendaraanController@update_index');
    Route::post('/kendaraan/{id}/update','KendaraanController@update');
    Route::get('/kendaraan/{id}/delete','KendaraanController@delete');
    
    Route::get('/pengajuan','PengajuanController@index')->name('data-pengajuan');
    Route::post('/pengajuan/create','PengajuanController@create')->name('add-pengajuan');
    Route::get('pengajuan/{id}/edit','PengajuanController@update_index');
    Route::post('/pengajuan/{id}/update','PengajuanController@update');
    Route::get('/pengajuan/{id}/delete','PengajuanController@delete');
    Route::get('/pengajuan/export/','PengajuanController@export')->name('cetak-pengajuan');
    
    Route::get('/request-a','ManagerAController@index')->name('requestA');
    Route::get('/request-a/acc/{id}/approve','ManagerAController@acc');
    Route::get('/request-a/deny/{id}/deny','ManagerAController@deny');
    
    Route::get('/request-b','ManagerBController@index')->name('requestB');
    Route::get('/request-b/acc/{id}/approve','ManagerBController@acc');
    Route::get('/request-b/deny/{id}/deny','ManagerBController@deny');

    Route::get('/admin-chart','Grafik@indexadm')->name('grafik-admin');

    Route::get('/chart-A','Grafik@indexA')->name('grafik-A');

    Route::get('/chart-B','Grafik@indexB')->name('grafik-B');
});