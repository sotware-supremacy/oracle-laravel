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

Route::get('/osama', function () {
    // return \Illuminate\Support\Facades\DB::table('syslog.syslog')->limit(10)->get();
    return \Illuminate\Support\Facades\DB::table('syslog.syslog')->count();
});
