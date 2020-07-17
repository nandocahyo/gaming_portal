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
    return view('pages.dashboard');
});

Route::prefix('admin')->namespace('Admin')->middleware(['auth','admin'])
->group(function() {
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::resource('player', 'PlayerController');
    Route::resource('tanding', 'TandingController');
    Route::resource('team', 'TeamController');
    Route::resource('tournament', 'TournamentController');

});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
