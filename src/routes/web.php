<?php

$namespace = 'Ophaant\Survey\Http\Controllers';

Route::group([
    'namespace' => $namespace,
    'prefix' => 'audit',
    'middleware' => 'web'
],function (){
    Route::get('/', 'SurveyController@index');

    Route::get('/test', 'SurveyController@test');

    Route::get('/add', 'SurveyController@add')->name('add-survey');
    Route::post('/add', 'SurveyController@store')->name('save-survey');

});
