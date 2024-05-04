<?php


use App\Http\Controllers\FiliereController;
use App\Http\Controllers\ModuleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\FiliereController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('filiere', FiliereController::class )->only(['index','store','update','destroy']);

Route::apiResource('niveau', NiveauController::class )->only(['index','store','update','destroy']);
Route::apiResource('salle', SalleController::class )->only(['index','store','update','destroy']);


Route::apiResource('module', ModuleController::class )->only(['index','store','update','destroy']);

