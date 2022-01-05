<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserApiController;
use App\Models\User;

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

// Route::get('/users', function(User $user){
//     $user = User::all();
//     return $user;
// });
Route::get('/user',[UserController::class, 'getUser']);
Route::post('/user',[UserController::class, 'PostUser']);
Route::get('/api-user',[UserApiController::class, 'index']);
Route::post('/api-user',[UserApiController::class, 'store']);
Route::put('/api-user/{id}',[UserApiController::class, 'destroy']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
