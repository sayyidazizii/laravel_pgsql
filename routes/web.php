<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\MuridController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\SiswaController;

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
Route::get('/index', 'SiswaController@index');
Route::get('/add','SiswaController@vtambah');
Route::get('/add/store','SiswaController@store');
Route::get('/edit/{id}','SiswaController@vedit');
Route::post('/update','SiswaController@save');
Route::get('/hapus/{id}','SiswaController@delete');
