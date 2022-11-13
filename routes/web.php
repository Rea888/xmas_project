<?php

use App\Http\Controllers\CodeImage;
use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\ForbidAccessBeforeChristmas;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(ForbidAccessBeforeChristmas::class)->group(function () {

    Route::get('/introduction', function () {
        return view('introduction');
    });

    Route::get('/second', function () {
        return "second puzle";
    });

});







