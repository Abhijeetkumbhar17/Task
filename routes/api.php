<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\API\RegisterController;

use App\Http\Controllers\ApiTaskController;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
// Route::controller(RegisterController::class)->group(function(){
//     Route::post('register', 'register');
//     Route::post('login', 'login');
// });

Route::post('/login',[RegisterController::class,'login']);
Route::post('/signup',[RegisterController::class,'register']);

Route::middleware('auth:sanctum')->group( function () {
                   Route::get('/',[ApiTaskController::class,'index']);
                    Route::post('/addtask',[ApiTaskController::class,'store']);
                    Route::get('/edit/{id}',[ApiTaskController::class,'edit']);
                    Route::put('/update/{id}',[ApiTaskController::class,'update']);
                    Route::delete('/delete/{id}',[ApiTaskController::class,'destroy']);
});


Route::get('/login',[RegisterController::class,'login'])->name('login');