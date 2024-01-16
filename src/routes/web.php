<?php

$namespace = 'Ophaant\Survey\Http\Controllers';

Route::group([
    'namespace' => $namespace,
    'prefix' => 'audit',
],function (){
    Route::get('/', 'SurveyController@index');

    Route::get('/test', 'SurveyController@test');
});
