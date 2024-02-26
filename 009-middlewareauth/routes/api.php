<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExampleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('/create', [AuthController::class, 'createUser'])->name('create-user');
Route::post('/login', [AuthController::class, 'loginUser'])->name('login-user');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/', [ExampleController::class,'index']);
// Route::get('no-acces', [ExampleController::class,'noAccess'])->name('no-access');

// Route::middleware(['example', 'auth', 'admin'])->group(function () {
//     Route::get('/', [ExampleController::class,'index']);
//     Route::get('/', [ExampleController::class,'index']);
//     Route::get('/', [ExampleController::class, 'index'])->withoutMiddleware('admin');
//     Route::get('/', [ExampleController::class,'index']);
//     Route::get('/', [ExampleController::class,'index']);
// });

