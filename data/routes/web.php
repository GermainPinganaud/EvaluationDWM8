<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| 1. Routes de test
| 2. Routes de CRUD
|
*/
/* 1. Routes de test */
Route::get('/helloworld', 'BaseController@helloworld');
Route::get('/laravel', 'BaseController@laravel');

/* 2. Routes de CRUD */
/* C -- Create */
Route::post('/create', 'ProductController@insertOne');
/* R -- Read */
Route::get('/read', 'ReadController@show');
/* U -- Update */
/* D -- Delete */
Route::post('/delete/{id}', 'ProductController@deleteOne');
