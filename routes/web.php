<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('todos', TodoController::class);
Route::get('/tasks/completed', [TodoController::class, 'completedTasks'])->name('tasks.completed');
Route::get('/tasks/todo', [TodoController::class, 'todoTasks'])->name('tasks.todo');