<?php

use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home2');

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


Route::get('/list', [BiodataController::class, 'index'])->name('list');
Route::get('/form_siswa', [BiodataController::class, 'create'])->name('form_siswa');
Route::post('/store_siswa', [BiodataController::class, 'store']);
Route::get('/edit/{id}', [BiodataController::class, 'edit'])->name('edit_siswa');
Route::put('/update/{id}', [BiodataController::class, 'update'])->name('update_siswa');
Route::delete('/delete/{id}', [BiodataController::class, 'destroy'])->name('destroy-siswa');
Route::get('/bio/{id}', [BiodataController::class, 'show'])->name('show-bio');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
