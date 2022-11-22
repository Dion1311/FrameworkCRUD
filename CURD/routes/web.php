<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabelMahasiswaController;

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
route::get('/',[TabelMahasiswaController::class, 'index']);
route::get('/create',[TabelMahasiswaController::class, 'create']);
route::get('/show/{id}',[TabelMahasiswaController::class, 'show']);
route::post('/update/{id}',[TabelMahasiswaController::class, 'update']);
route::post('/store',[TabelMahasiswaController::class, 'store']);
route::get('/destroy/{id}',[TabelMahasiswaController::class, 'destroy']);
