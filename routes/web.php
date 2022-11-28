<?php

use App\Http\Controllers\SolutionController;
use Illuminate\Support\Facades\Auth;
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
    Route::post('/nice_job', [SolutionController::class , 'getSolution']) ->name('nice_job');

    Route::get('/keep_going',function () {
        return view('keep_going'); })->name('keep_going');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
