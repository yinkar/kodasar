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
Route::controller(DictionaryController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/dictionaries', 'index');
    Route::get('/dictionaries/{dictionary:slug}', 'show')
        ->where('dictionaries', '[a-z\-]+');

    Route::get('/create_dictionary', 'create');
    Route::post('/create_dictionary', 'store');
});

// Entries
Route::controller(EntryController::class)->group(function () {        
    Route::get('/dictionaries/{dictionary:slug}/entries/{entry}', 'show')
        ->where('dictionaries', '[a-z\-]+')->whereNumber('entry')
        ->name('entry.show');

    Route::get('/dictionaries/{dictionary:slug}/create_entry', 'create')
        ->where('dictionaries', '[a-z\-]+');
    Route::post('/dictionaries/{dictionary:slug}/create_entry', 'store')
        ->where('dictionaries', '[a-z\-]+');
});

// Users
Route::controller(UserController::class)->group(function () {
    Route::get('/register', 'register')->middleware('guest');
    Route::post('/register', 'save')->middleware('guest');
    
    Route::get('/login', 'login')->middleware('guest');
    Route::post('/login', 'session')->middleware('guest');

    Route::get('/logout', 'logout');

    Route::get('/users', 'list');
    Route::get('/users/{user:id}', 'profile');
});

// Search
Route::get('/search', [ SearchController::class, 'results' ]);

// Other pages
Route::get('/about', fn () => view('about'));
Route::get('/help', fn () => view('help.main'));

// Color mode
Route::get('/to-dark', function () {
    session(['dark_mode' => true]);
    return back();
});
Route::get('/to-light', function () {
    session(['dark_mode' => false]);
    return back();
});