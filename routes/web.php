<?php

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
    return view('page.home');
})->name('home');

Route::get('/gioi-thieu', function () {
    return view('page.introduce');
})->name('introduce');

Route::get('/vi-tri', function () {
    return view('page.location');
})->name('location');

Route::get('/tien-ich', function () {
    return view('page.utility');
})->name('utility');

Route::get('/mat-bang', function () {
    return view('page.ground');
})->name('ground');

Route::get('/nha-mau', function () {
    return view('page.models');
})->name('models');

Route::get('/thanh-toan', function () {
    return view('page.payment');
})->name('payment');

Route::get('/tien-do', function () {
    return view('page.progress');
})->name('progress');
