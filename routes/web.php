<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DetailController;

//従業員一覧ページ表示、検索機能
Route::get('/employee/indicate', [EmployeeController::class, 'index'])->name('employee.index');
Route::post('/employee/indicate', [EmployeeController::class, 'search'])->name('employee.search');

//従業員詳細ページ表示
Route::get('/employee/detail/{employee_id}', [EmployeeController::class, 'showDetailForm'])->name('showDetailForm');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
