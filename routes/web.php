<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*========================================================================
                            JOBSHEET 3
========================================================================*/

/*-----------------------------------------------------------------------
                            Praktikum 4
-------------------------------------------------------------------------*/

Route::get('/level', [LevelController::class, 'index']);

/*-----------------------------------------------------------------------
                            Praktikum 5
-------------------------------------------------------------------------*/

Route::get('/kategori', [KategoriController::class, 'index']);

/*-----------------------------------------------------------------------
                            Praktikum 5
-------------------------------------------------------------------------*/

Route::get('/user', [UserController::class, 'index']);

/*-----------------------------------------------------------------------
                            JS 4 : Praktikum 2
-------------------------------------------------------------------------*/

Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

/*-----------------------------------------------------------------------
                            JS 5
-------------------------------------------------------------------------*/

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::put('/kategori/{id}', [KategoriController::class, 'store2']);
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete']);


/*-----------------------------------------------------------------------
                            JS 6
-------------------------------------------------------------------------*/

Route::resource('m_user', POSController::class);

/*-----------------------------------------------------------------------
                            JS 7
-------------------------------------------------------------------------*/

Route::get('/', [WelcomeController::class, 'index']);