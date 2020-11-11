<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [CompaniesController::class, "index"])->name('comp');
Route::post('/create/comp', [CompaniesController::class, "create"])->name('comp.create');
Route::get('/edit/comp/{company}', [CompaniesController::class, "edit"])->name('comp.edit');
Route::post('/update/comp/{company}', [CompaniesController::class, "update"])->name('comp.update');
Route::post('/delete/comp/{company}', [CompaniesController::class, "delete"])->name('comp.delete');
Route::post('/create/emp', [EmployeesController::class, "create"])->name('emp.create');
Route::get('/edit/emp/{employee}', [EmployeesController::class, "edit"])->name('emp.edit');
Route::post('/update/emp/{employee}', [EmployeesController::class, "update"])->name('emp.update');
Route::post('/delete/emp/{employee}', [EmployeesController::class, "delete"])->name('emp.delete');
