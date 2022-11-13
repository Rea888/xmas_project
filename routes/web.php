<?php

use App\Http\Controllers\CodeImage;
use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\ForbidAccessBeforeChristmas;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/introduction', function(){
    return view('introduction');
})->middleware(ForbidAccessBeforeChristmas::class);

Route::get('/second', function(){
    return "second puzle";
});

Route::get('/code', [ForbidAccessBeforeChristmas::class, 'handle']);
