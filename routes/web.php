<?php

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
    return view('home');
});
Route::get('/portfolio/1', function () {
    return view('portfolio.portfolio_1');
});
Route::get('/portfolio/2', function () {
    return view('portfolio.portfolio_2');
});
Route::get('/portfolio/3', function () {
    return view('portfolio.portfolio_3');
});
