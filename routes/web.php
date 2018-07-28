<?php


Route::get('/','PostController@index')->name('home');
Route::get('/posts/create','PostController@create');
Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts','PostController@store');

Route::post('/posts/{post}/comment','CommentsController@store');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionsController@create')->name('login');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');


