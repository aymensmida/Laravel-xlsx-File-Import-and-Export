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
Route::post("Import-Exel", "App\http\Controllers\ImportExelController@import")->name('Import.Exel');
Route::post("Export-Exel", "App\http\Controllers\ExportController@export")->name('Export.Exel');
