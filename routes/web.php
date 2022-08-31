<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\DbtestController;
use App\Http\Controllers\UsersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/db', function () {
    return view('db');
});
Route::post('/dbdata', [DbtestController::class, 'putData']);


// Route::get('/db', [DbtestController::class, 'getData']);

Route::get('/cont', function ()
{
    return view('test',[
        'price' => PriceController::ethPrice()
    ]);
});

Route::get('/basic', function () {
    return "залогинило";
})->middleware('auth.basic');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\UsersController::class, 'allData'])->name('users')->middleware('isadmin');
Route::get('/users/{id}', [App\Http\Controllers\UsersController::class, 'userInfo'])->name('user-info')->middleware('isadmin');
Route::get('/users/{id}/delete', [App\Http\Controllers\UsersController::class, 'userDelete'])->name('user-delete')->middleware('isadmin');

Route::get('/tasks', [App\Http\Controllers\TasksController::class, 'index'])->name('tasks');
Route::post('/tasks', [App\Http\Controllers\TasksController::class, 'store'])->name('save-task');
Route::get('/tasks/{id}/delete', [App\Http\Controllers\TasksController::class, 'delete'])->name('delete-task');





