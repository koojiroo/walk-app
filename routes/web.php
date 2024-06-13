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

Route::get('/step', App\Http\Controllers\Step\IndexController::class)
->name('step.index');
Route::post('/step/create', App\Http\Controllers\Step\CreateController::class)
->name('step.create');
Route::get('/step/update/{stepId}', App\Http\Controllers\Step\Update\IndexController::class)
->name('step.update.index')->where('stepId', '[0-9]+');
Route::put('/step/update/{stepId}', App\Http\Controllers\Step\Update\PutController::class)
->name('step.update.put')->where('stepId', '[0-9]+');
