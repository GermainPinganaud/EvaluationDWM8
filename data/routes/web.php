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
Route::get('/', 'BaseController@accueil');
Route::get('/helloworld', 'BaseController@helloworld');
Route::get('/laravel', 'BaseController@laravel');

/* 2. Routes de CRUD */
/* C -- Create */
Route::post('/create', 'ProductController@insertOne');
/* R -- Read */
Route::get('/saferead', 'ProductController@saferead');
Route::get('/read', 'ProductController@read');
Route::post('/read', 'ProductController@read');
/* U -- Update */
Route::post('/update/{id}', 'ProductController@updateOne');
Route::post('/update', 'ProductController@updateOneAction');
/* D -- Delete */
Route::post('/delete/{id}', 'ProductController@deleteOne');
