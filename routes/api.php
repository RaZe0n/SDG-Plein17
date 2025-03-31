<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\WorkshopController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/workshops/enter/{workshop}/{user}', [WorkshopController::class, 'enter'])->name('workshops.enter');

Route::get('/chart/sector', [AdminController::class, 'sectorChart'])->name('chart.sector');
Route::get('/chart/aanvragen', [AdminController::class, 'requestsChart'])->name('chart.requests');