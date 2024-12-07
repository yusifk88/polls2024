<?php

use App\Http\Controllers\ResultsController;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::get("/mp-results/sissala-east", [ResultsController::class, 'mpSEIndex']);
Route::get("/mp-results/sissala-west", [ResultsController::class, 'mpSWIndex']);
Route::get("/pr-results/sissala-east", [ResultsController::class, 'prSEIndex']);
Route::get("/pr-results/sissala-west", [ResultsController::class, 'prSWIndex']);
Route::get("constituencies", [ResultsController::class, 'constituencies']);
Route::get("candidates", [ResultsController::class, 'candidates']);
Route::get("candidates/press", [ResultsController::class, 'candidatesPress']);
Route::get("community/{id}", [ResultsController::class, 'communityDetails']);
Route::get("poling-stations", [ResultsController::class, 'polingStations']);
Route::post("record-pm",[ResultsController::class, 'recordPM']);

Route::get("/user",function (){

   $user = request()->user();

   return response()->json(["message"=>"User returned","data"=>$user]);

})->middleware('auth:sanctum');
