<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoLiveWireController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\TodoUserManagement;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use domain\TodoService;

Route::get('/',[HomeController::class,'index'])->name('home');
//Route::get('/todo',[TodoController::class,'index'])->name('todo');
//Route::post('/store',[TodoController::class,'store'])->name('todo.store');

Route::prefix('/todo')->group(function (){
    Route::get('/',[TodoController::class,'index'])->name('todo');
    Route::post('/store',[TodoController::class,'store'])->name('todo.store');
    Route::get('/{task_id}/delete',[TodoController::class,'delete'])->name('todo.delete');
    Route::get('/{task_id}/done',[TodoController::class,'status'])->name('todo.done');
});

Route::prefix('/todo-livewire')->group(function (){
    Route::get('/',[TodoLiveWireController::class,'index'])->name('todo.livewire');
    Route::post('/store',[TodoLiveWireController::class,'store'])->name('todo.store');
   // Route::get('/{task_id}/delete',[TodoController::class,'delete'])->name('todo.delete');
   //Route::get('/{task_id}/done',[TodoController::class,'done'])->name('todo.done');
});

Route::prefix('/salary')->group(function (){
    Route::get('/',[SalaryController::class,'index'])->name('salary');
    //Route::post('/store',[TodoController::class,'store'])->name('todo.store');
   // Route::get('/{task_id}/delete',[TodoController::class,'delete'])->name('todo.delete');
   //Route::get('/{task_id}/done',[TodoController::class,'done'])->name('todo.done');
});



Route::prefix('/todo-usermanagement')->group(function (){
    Route::get('/',[TodoUserManagement::class,'index'])->name('todo.usermanagement');
  //  Route::post('/store',[TodoController::class,'store'])->name('todo.store');
   // Route::get('/{task_id}/delete',[TodoController::class,'delete'])->name('todo.delete');
   //Route::get('/{task_id}/done',[TodoController::class,'done'])->name('todo.done');
});

// Route::get('/users', \App\Http\Livewire\UserManagement::class)->name('users.manage');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/profile', [TodoController::class, 'profile'])->middleware('auth')->name('custom.profile');


//Route::resource("user",UserController::class);
Route::prefix('/role')->group(function (){
    Route::get('/',[RoleController::class,'index'])->name('manage.role');
    Route::get('/store',[RoleController::class,'create'])->name('role.create');
    Route::post('/store',[RoleController::class,'store'])->name('role.store');
    Route::get('/{role_id}/delete',[RoleController::class,'delete'])->name('role.delete');
   Route::get('/{role_id}/edit',[RoleController::class,'edit'])->name('role.edit');
   Route::post('/{role_id}/update',[RoleController::class,'update'])->name('role.update');
});





          