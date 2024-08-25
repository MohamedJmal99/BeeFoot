<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // Return the 'accueil' view
    return view('accueil');

    // Simulate a 500 Internal Server Error
    abort(500);
});

Route::get('/contact', function () {
    // Return the 'accueil' view
    return view('contact');
});

Route::get('/nos-activites', function () {
    // Return the 'accueil' view
    return view('activite');
});
