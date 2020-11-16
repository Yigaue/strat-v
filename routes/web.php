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

use App\Http\Controllers\PermeabilityRatio;

Route::get('/{any?}', function () {
    return view('welcome');
});

// Route::get('/calculate', 'PermeabilityRatio@calculate');

// Route::get('/file', function() {
//     return 'File coming soon';
// })->name('file');

// Route::get('/calculator', function() {
//     return view('calculator');
// })->name('calculator');

// Route::get('/table', function() {
//     return 'table coming also';
// })->name('table');

Route::get('/graph', function() {
    return 'graphs coming soon';
})->name('graph');
