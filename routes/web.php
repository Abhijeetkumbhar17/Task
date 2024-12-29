<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Route::get('/', function () {
//     return view('welcome');
// });


  

Route::get('/create',function(){
    return view('tasks.create');
    });
// Route::resource('products', TaskController::class);
// Route::get('/', [TaskController::class],'index');
Route::get('/',[TaskController::class,'index'])->name('allproduct');
Route::post('/addtask',[TaskController::class,'store'])->name('addtask');
Route::get('/edit/{id}',[TaskController::class,'edit'])->name('edittask');
Route::put('/update/{id}',[TaskController::class,'update'])->name('updatetask');
Route::delete('/delete/{id}',[TaskController::class,'destroy'])->name('deletetask');




// Route::resource('products', TaskController::class);

