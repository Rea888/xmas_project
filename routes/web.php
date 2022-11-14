<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ForbidAccessBeforeChristmas;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(ForbidAccessBeforeChristmas::class)->group(function () {

    Route::get('/introduction', function () {
        return view('introduction');
    });

    Route::get('/nice_job', function () {
        return "second puzzle";
    });

});







