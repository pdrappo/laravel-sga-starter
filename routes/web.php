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

// Estoy es para la App de Vue incluida
Route::get('{path}', function () {
    return view('vue');
})->where('path', '(.*)');

// Esto viene de seguir el tutorial de 
// https://github.com/yyx990803/laravel-vue-cli-3
// Route::get('/{any}', 'SpaController@index')->where('any', '.*');

// Route::get('/', function () {
//     return view('welcome');
// });
