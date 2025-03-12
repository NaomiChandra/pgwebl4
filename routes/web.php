<?php

use App\Http\Controllers\PointsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableControler;

Route::get('/', [PointsController::class, 'index'])-> name('map');

Route::get('/table', [TableControler::class, 'index'])-> name('table');

Route::resource('points', PointsController::class);
