<?php

use App\Http\Controllers\MemberController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('/member')->group(function () {
    Route::get('/', [MemberController::class, 'index']);
    Route::post('/register', [MemberController::class, 'store']);
    Route::post('/login', [MemberController::class, 'login']);

    Route::prefix('/profile')->group(function () {
        Route::get('/{id}', [MemberController::class, 'getProfile']);
        Route::put('/{id}', [MemberController::class, 'updateProfile']);
    });
});
