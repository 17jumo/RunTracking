<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::resource('runs', RunController::class);

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})-> middleware(['auth'])->name('dashboard');

//Route::get('/', function () { return redirect('/runs'); });

Route::get('/', 'App\Http\Controllers\RunController@index');
//Route::get('/dashboard', 'App\Http\Controllers\RunController@index');
//
Route::resource('runs', RunController::class)->only(['index','show']);
Route::resource('runs', RunController::class)->only(['create','store','edit','update','destroy'])->middleware('auth');

Route::resource('results', ResultController::class)->only(['index','show','create']);
Route::resource('results', ResultController::class)->only(['create', 'store','edit','update','destroy'])->middleware('auth');

require __DIR__.'/auth.php';

