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
    return view('welcome');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('laralist', 'Laralist\LaralistController@index')->name('laralist.index');
Route::get('podcasts', 'Podcast\PodcastsController@index')->name('podcasts.index');
Route::get('tasks', 'Task\TasksController@index')->name('tasks.index');
Route::post('tasks', 'Task\TasksController@store')->name('tasks.store');
Route::get('tasks/create', 'Task\TasksController@create')->name('tasks.create');
