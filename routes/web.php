<?php

use App\Http\Controllers\LoginController;
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

Route::group(["middleware" => "guest"], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get("/login", [LoginController::class, 'index'])->name('login.index');
    Route::post("/login", [LoginController::class, 'login'])->name('login.login');
});

Route::group(["middleware" => "auth"], function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});
