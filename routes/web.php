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

// Route::view('/register','livewire.mainR')->name('register');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('livewire.User.index');
    })->name('dashboard');

    Route::view('/productos','livewire.Products.mainP')->name('productos');
    Route::view('/empresas','livewire.Empresas.mainE')->name('empresas');
    Route::view('/settings','livewire.User.mainU')->name('settings');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified' ,
    'permission:admin_menu'
])->group(function () {
    Route::view('/browsers','livewire.Barras.mainB')->name('browsers');
    Route::view('/rol','livewire.Roles.mainR')->name('roles');
    Route::view('/paises','livewire.Paises.mainPa')->name('paises');
});
