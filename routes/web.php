<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\rogzites;

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
Route::get('/', [rogzites::class,"getContent"]);
Route::POST('/', [rogzites::class,"rogzit"]);
Route::get('/', function () {
    return view('welcome');
}); 
