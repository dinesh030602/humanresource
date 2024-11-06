<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Models\Employee;

Route::get('/', function () {
    return view('welcome');
});

//projects route:

Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::delete('projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

//employees route:

route::get('employees',[EmployeeController::class,'index'])->name('employees.index');
route::get('employee/create',[EmployeeController::class,'create'])->name('employees.create');
route::get('employee/{Employee}',[EmployeeController::class, 'show'])->name('employees.show');
Route::post('employee', [employeeController::class, 'store'])->name('employees.store');
Route::get('employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
route::put('employees/{employee}/update',[EmployeeController::class,'update'])->name('employees.update');
Route::delete('employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');