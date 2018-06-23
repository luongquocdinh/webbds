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

Route::get('/login', function () {
    return redirect(\route('login'));
});

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/doLogin', 'Auth\LoginController@doLogin')->name('doLogin');

\Illuminate\Support\Facades\Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    
    Route::get('them-bai', 'IndexController@index')->name('main.add');
    Route::post('store', 'IndexController@add')->name('main.store');
    Route::group(['prefix' => 'gioi-thieu'], function () {
        Route::get('/', 'IntroduceController@index')->name('introduce.index');
        Route::get('detail/{id}', 'IntroduceController@detail')->name('introduce.edit');
        Route::post('detail/{id}', 'IntroduceController@detail')->name('introduce.update');
        Route::get('status/{id}', 'IntroduceController@status')->name('introduce.status');
    });
    
    Route::group(['prefix' => 'vi-tri', 'middleware'], function () {
        Route::get('/', 'LocationController@index')->name('location.index');
        Route::get('detail/{id}', 'LocationController@detail')->name('location.edit');
        Route::post('detail/{id}', 'LocationController@detail')->name('location.update');
        Route::get('status/{id}', 'LocationController@status')->name('location.status');
    });

    Route::group(['prefix' => 'tien-ich'], function () {
        Route::get('/', 'UtilityController@index')->name('utility.index');
        Route::get('detail/{id}', 'UtilityController@detail')->name('utility.edit');
        Route::post('detail/{id}', 'UtilityController@detail')->name('utility.update');
        Route::get('status/{id}', 'UtilityController@status')->name('utility.status');
    });

    Route::group(['prefix' => 'mat-bang'], function () {
        Route::get('/', 'GroundController@index')->name('ground.index');
        Route::get('detail/{id}', 'GroundController@detail')->name('ground.edit');
        Route::post('detail/{id}', 'GroundController@detail')->name('ground.update');
        Route::get('status/{id}', 'GroundController@status')->name('ground.status');
    });

    Route::group(['prefix' => 'nha-mau'], function () {
        Route::get('/', 'ModelsController@index')->name('models.index');
        Route::get('detail/{id}', 'ModelsController@detail')->name('models.edit');
        Route::post('detail/{id}', 'ModelsController@detail')->name('models.update');
        Route::get('status/{id}', 'ModelsController@status')->name('models.status');
    });

    Route::group(['prefix' => 'thanh-toan'], function () {
        Route::get('/', 'PaymentController@index')->name('payment.index');
        Route::get('detail/{id}', 'PaymentController@detail')->name('payment.edit');
        Route::post('detail/{id}', 'PaymentController@detail')->name('payment.update');
        Route::get('status/{id}', 'PaymentController@status')->name('payment.status');
    });

    Route::group(['prefix' => 'tien-do'], function () {
        Route::get('/', 'ProgressController@index')->name('progress.index');
        Route::get('detail/{id}', 'ProgressController@detail')->name('progress.edit');
        Route::post('detail/{id}', 'ProgressController@detail')->name('progress.update');
        Route::get('status/{id}', 'ProgressController@status')->name('progress.status');
    });

    Route::group(['prefix' => 'tin-tuc'], function () {
        Route::get('/', 'NewsController@index')->name('news.index');
    });
});

Route::get('/', function () {
    return view('page.home');
})->name('home');

Route::get('/gioi-thieu', 'IntroduceController@client')->name('introduce');

Route::get('/vi-tri', 'LocationController@client')->name('location');

Route::get('/tien-ich', 'UtilityController@client')->name('utility');

Route::get('/mat-bang', 'GroundController@client')->name('ground');

Route::get('/nha-mau', 'ModelsController@client')->name('models');

Route::get('/thanh-toan', 'PaymentController@client')->name('payment');

Route::get('/tien-do', 'ProgressController@client')->name('progress');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
