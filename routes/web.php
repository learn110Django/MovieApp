<?php

use Illuminate\Support\Facades\Route;




Route::get('/', 'MoviesControlle@index')->name('movies.index');
Route::get('/movies/{id}', 'MoviesControlle@show')->name('movies.show');


Route::get('/actors', 'ActorsController@index')->name('actors.index');
Route::get('/actors/{id}', 'ActorsController@show')->name('actors.show');
Route::get('/actors/page/{page?}', 'ActorsController@index');


Route::get('/tv', 'TvController@index')->name('tv.index');
Route::get('/tv/{id}', 'TvController@show')->name('tv.show');
