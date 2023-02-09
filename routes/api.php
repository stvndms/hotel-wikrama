<?php

use App\Http\Controllers\GuestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('guests', GuestController::class);
Route::get('/guest', [GuestController::class, 'index']);
Route::post('/guest', [GuestController::class, 'createApi']);
Route::post('/guest/update/{guest:id}', [GuestController::class, 'updateApi']);
Route::delete('/guest/delete/{guest:id}', [GuestController::class, 'deleteApi']);