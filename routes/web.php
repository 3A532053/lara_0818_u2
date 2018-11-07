<?php

Route::get('/', function() {
    return view('home.index');
});

Route::get('/hello/{name?}', ['as'=>'hello.index', 'uses'=>'HelloController@index']);