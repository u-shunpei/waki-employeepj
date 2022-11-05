<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;

//従業員一覧ページ表示、検索機能
Route::get('/employee/list', [EmployeeController::class, 'index'])->name('employee.index');
Route::post('/employee/list', [EmployeeController::class, 'search'])->name('search');

//従業員詳細ページ表示
Route::get('/employee/detail/{user_id}', [EmployeeController::class, 'showDetailForm'])->name('showDetailForm');

//プロフィール編集画面表示、編集機能、成功画面
Route::get('/user/edit/{user_id}', [ProfileController::class, 'showEditForm'])->name('profile.edit');
Route::post('/user/success/{user_id}', [ProfileController::class, 'edit'])->name('edit');
Route::get('/user/success/{user_id}', [ProfileController::class, 'success'])->name('profile.success');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
