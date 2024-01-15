<?php

$namespace = 'Survey\Http\Controllers';

Route::group([
    'namespace' => $namespace,
    'prefix' => 'audit',
],function (){
    Route::get('/',function () {
        return ['Hello', 'this is audit route'];
    });
});
