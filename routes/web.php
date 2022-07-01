<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
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

Route::get('/dashboard', 'App\Http\Controllers\ChartController@index',function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/table', 'App\Http\Controllers\TableController@index',  function () {
    return view('listTable');
})->middleware(['auth'])->name('listTable');
require __DIR__ . '/auth.php';

Route::get('/table/cari','App\Http\Controllers\TableController@cari',  function () {
    return view('listTable');
})->middleware(['auth'])->name('cari');
require __DIR__ . '/auth.php';