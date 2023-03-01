<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ManagersController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\AllocationController;
use App\Http\Controllers\DashboardController;





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





Route::get('/managers', [ManagersController::class, 'list']);

Route::get('/managers/create', [ManagersController::class, 'create']);

Route::post('/managers/store', [ManagersController::class, 'store']);

Route::get('/managers/edit/{id}', [ManagersController::class, 'edit']);

Route::post('/managers/update/{id}', [ManagersController::class, 'update']);


Route::get('/employees', [EmployeesController::class, 'list']);

Route::get('/employees/create', [EmployeesController::class, 'create']);

Route::post('/employees/store', [EmployeesController::class, 'store']);

Route::get('/employees/edit/{id}', [EmployeesController::class, 'edit']);

Route::post('/employees/update/{id}', [EmployeesController::class, 'update']);


Route::get('/allocations', [AllocationController::class, 'list']);

Route::get('/dashboard', [DashboardController::class, 'index']);



