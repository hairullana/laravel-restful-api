<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\FormController;
use App\Http\Controllers\API\ScoreController;
use App\Models\Score;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function(){
  // crud students
  Route::post('/create', [FormController::class, 'create']);
  Route::get('/edit/{id}', [FormController::class, 'edit']);
  Route::post('/edit/{id}', [FormController::class, 'update']);
  Route::post('/delete/{id}', [FormController::class, 'delete']);

  // crud scores with multiple data
  Route::post('/score/create', [ScoreController::class, 'create']);
  Route::get('/score/show/{id}', [ScoreController::class, 'show']);
  Route::post('/score/update/{id}', [ScoreController::class, 'update']);

  Route::get('/logout', [FormController::class, 'logout']);
});

Route::post('login', [AuthController::class, 'login']);