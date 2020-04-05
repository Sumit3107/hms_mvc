<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/stafflogin', function () {
    return view('stafflogin');
});
Route::get('/staffdash', function () {
    return view('staff');
});
// Route::post('/staffdash',"login@check"); 
Route::get('/shift', function () {
    return view('shift');
}); 
Route::get('/leave', function () {
    return view('leave');
}); 
Route::get('/salary', function () {
    return view('salary');
}); 
Route::get('/update', function () {
    return view('update');
}); 