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


Route::prefix('admin')->namespace('Admin')->middleware(['auth','admin'])
->group(function() {
    Route::get('/','DashboardController@index')->name('dashboard');
    Route::resource('player', 'PlayerController');
    Route::resource('tanding', 'TandingController');
    Route::resource('team', 'TeamController');
    Route::resource('tournament', 'TournamentController');
    Route::resource('tournament-category', 'TournamentCategoryController');
    Route::resource('info', 'InfoController');

    //ronde page route
    Route::get('/ronde1','TandingController@ronde1')->name('ronde1');
    Route::get('/ronde2','TandingController@ronde2')->name('ronde2');
    Route::get('/ronde3','TandingController@ronde3')->name('ronde3');
    Route::get('/final','TandingController@final')->name('final');
    Route::get('/bracket','TandingController@bracket')->name('bracket');
    Route::get('/history','TandingController@history')->name('history');
    Route::put('/score1/{id}','TandingController@score1')->name('score1');
    Route::put('/score2/{id}','TandingController@score2')->name('score2');
    Route::put('/score3/{id}','TandingController@score3')->name('score3');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/match', 'HomeController@match')->name('match');
Route::get('/join','JoinController@join')->name('join')->middleware(['auth']);
Route::post('/register-team','JoinController@register_team')->name('register_team')->middleware(['auth']);
