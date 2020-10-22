<?php

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index')->name('home');

Route::get('news-{slug}','HomeController@categoryNews')->name('category.news');
Route::get('new-{slug}','HomeController@newIndex')->name('new');



Route::get('videos','HomeController@videos')->name('videos');
Route::get('video-{slug}','HomeController@videoSelect')->name('video');





Route::get('contact','HomeController@contact')->name('contact');
Route::post('contact/send','HomeController@send')->name('contact.send');


Route::get('page/{slug}','HomeController@page')->name('page');

Route::post('search','HomeController@search')->name('search');


Auth::routes();
