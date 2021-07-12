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



Auth::routes();
Route::middleware(["admin","auth"])->group(function () {
Route::get('/films', 'FilmsController@index')->name('films');
Route::get('/add', 'FilmsController@create')->name('add');
Route::get('/', function () {
    return redirect(route("films"));
});
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/gallery', 'FilmsController@afficher')->name('gallery');
Route::get('/single/{id}', 'FilmsController@show')->name('single');
Route::post('/films/store', 'FilmsController@store')->name('storeFilms');
Route::post('/comments/store', 'CommentsController@store')->name('storeComments');
