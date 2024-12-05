<?php

use App\Http\Controllers\ResultsController;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::get("/mp-results/sissala-east", [ResultsController::class, 'mpSEIndex']);
Route::get("constituencies", [ResultsController::class, 'constituencies']);
Route::get("candidates", [ResultsController::class, 'candidates']);
Route::get("community/{id}", [ResultsController::class, 'communityDetails']);
Route::get("poling-stations", [ResultsController::class, 'polingStations']);
Route::post("record-pm",[ResultsController::class, 'recordPM']);
