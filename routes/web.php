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
    info('/', request()->all());
    dd(request()->all());
    // return view('welcome');
});

Route::get('returntrue', function () {
    info('returntrue', request()->all());
    return true;
});

Route::get('somedata', function () {
    info('somedata', request()->all());
    return response()->json([
        'status' => 'success',
        'message' => 'logout',
    ]);
});
