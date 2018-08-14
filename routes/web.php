<?php


Route::get('/', 'TaskController@index');

Route::post('/task', 'TaskController@store');

Route::delete('/task/{task}', 'TaskController@delete');
