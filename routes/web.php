<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableControler;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\PolygonsController;
use App\Http\Controllers\PolylinesController;

Route::get('/', [PointsController::class, 'index'])-> name('map');

Route::get('/table', [TableControler::class, 'index'])-> name('table');

Route::resource('points', PointsController::class);
Route::resource('polylines', PolylinesController::class);
Route::resource('polygons', PolygonsController::class);
