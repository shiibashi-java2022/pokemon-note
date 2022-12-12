<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sample\IndexControlle;
use League\CommonMark\Extension\CommonMark\Node\Block\IndentedCode;

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

Route::get('/sample',[IndexControlle::class,'show']);

Route::get('/sample/{id}',[IndexControlle::class,'showId']);

Route::get('/top',[IndexControlle::class,'showTop']);