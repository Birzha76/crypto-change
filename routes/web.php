<?php

use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'index'])->name('home');
Route::post('/', [Controller::class, 'send'])->name('send');
Route::get('/test', [Controller::class, 'test']);
