<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\checkTime;
use App\Http\Middleware\AfterTime;


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
    Route::middleware([checkTime::class])->group(function(){
        Route::get('/', function () {
            return view('welcome');
        });
    });

    Route::middleware([AfterTime::class])->group(function(){
        Route::get('/home', function () {
            return view('index');
        })->name('home');
    });

    Route::get('/bye', function() {
        return view('thank_you');
    })->name('bye');