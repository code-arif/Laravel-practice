<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return "hello form index page";
});

Route::redirect(uri:'pr', destination: 'profile');

Route::get('/profile', function () {
    return "hello form profile page";
});

Route::get('/post/{title?}/{id?}', function ($title = 'default text' , $id = 'id is required') {
    return "what is: " .$title . " ||||  And your ID is: ".$id;
})->where('id', '[0-9]+');

