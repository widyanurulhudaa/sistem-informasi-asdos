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


 Route::group(['middleware'=>['auth']],function(){
    Route::get('/admin', function () {
        return view('pages.admin1')->name('admin1');

    });
 });




Route::get('/dashboard', function () {
    return view('dashboard');
});





require __DIR__.'/auth.php';

Route::group(['middleware'=>['auth' ,'role:mahasiswa']],function(){
    Route::get('/mahasiswa', function () {
        return 'ini halaman mahasiswa ';
    });
});

Route::group(['middleware'=>['auth' ,'role:admin']],function(){
    Route::get('/admin', function () {
        return 'ini halaman admin ';
    });
});

Route::group(['middleware'=>['auth' ,'role:dosen']],function(){
    Route::get('/dosen', function () {
        return 'ini halaman dosen ';
    });
});
