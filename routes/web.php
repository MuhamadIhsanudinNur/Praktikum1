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
Route::get('biodata', function () {
    $Data=[
        'nama'=>'Muhamad Ihsanudin Nur',
        'lahir'=>'Bandung',
        'hobi'=>'Game',
        'jk'=>'Laki-Laki',
        'agama'=>'Islam',
        'alamat'=>'Tawang',
        'telp'=>'08987922911',
        'email'=>'ihsan110304@gmail.com'
    ];
    return view('biodata',$Data);

});
