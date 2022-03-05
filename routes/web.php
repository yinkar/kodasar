<?php

use App\Http\Controllers\DictionaryController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
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

// Dictionaries
Route::get('/', [ DictionaryController::class, 'index' ]);

Route::controller(DictionaryController::class)->group(function () {
    Route::get('/dictionary/{dictionary:slug}', 'show')
        ->where('dictionary', '[a-z\-]+');
});

// Entries
Route::controller(EntryController::class)->group(function () {        
    Route::get('/dictionary/{dictionary:slug}/entry/{entry}', 'show')
        ->where('dictionary', '[a-z\-]+')->whereNumber('entry');
});

// Users
Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login');
    Route::get('/register', 'register');
    Route::post('/register', 'save');
});

// Search
Route::get('/search', [ SearchController::class, 'results' ]);
