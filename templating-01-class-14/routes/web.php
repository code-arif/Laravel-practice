<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $sliderHeader = "Shop in style";
    $sliderContent = "With this shop hompeage template";
    return view('welcome' ,compact(['sliderHeader' , 'sliderContent']));
});

Route::get('/blog', function () {
    $sliderHeader = "This is blog page";
    $sliderContent = "Show with blog page";
    return view('blog' , compact(['sliderHeader' , 'sliderContent']));
});


