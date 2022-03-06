<?php

use App\Http\Controllers\DictionaryController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Models\Entry;
use Illuminate\Http\Request;
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
Route::controller(DictionaryController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/dictionaries', 'index');
    Route::get('/dictionaries/{dictionary:slug}', 'show')
        ->where('dictionaries', '[a-z\-]+');
});

// Entries
Route::controller(EntryController::class)->group(function () {        
    Route::get('/dictionaries/{dictionary:slug}/entry/{entry}', 'show')
        ->where('dictionaries', '[a-z\-]+')->whereNumber('entry')
        ->name('entry.show');
});

// Users
Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login');
    Route::get('/register', 'register');
    Route::post('/register', 'save');
});

// Search
Route::get('/search', [ SearchController::class, 'results' ]);

// Other pages
Route::get('/about', fn () => view('about'));
Route::get('/help', fn () => view('help.main'));
