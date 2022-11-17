<?php

use App\Http\Controllers\SolutiomController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ForbidAccessBeforeChristmas;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(ForbidAccessBeforeChristmas::class)->group(function () {

    Route::get('/introduction', function () {
        return view('introduction');
    });

    Route::get('/nice_job',function () {
        return view('nice_job');
    });
    Route::post('/nice_job', [SolutiomController::class , 'getSolution']) ->name('nice_job');

    Route::get('/keep_going',function () {
        return view('keep_going'); })->name('keep_going');
});








