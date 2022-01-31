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
    return view('index');
})->name('index');

Route::get('/miPresentacion', function () {
    return view('me.presentacion');
})->name('miPresentacion');


Route::get('/miExperiencia', function () {
    return view('me.experiencia');
})->name('miExperiencia');
