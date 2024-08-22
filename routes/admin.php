<?php

use App\Http\Controllers\admins\DanhMucController;
use App\Models\DanhMuc;
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



Route::prefix('admins')

    ->as('admins.')
    ->group(function () {
        Route::get('/', function () {
            return view('admins/dashboard');
        });
        Route::get('index',             [DanhMucController::class, 'index'])->name('index');
        Route::get('create',            [DanhMucController::class, 'create'])->name('create');
        Route::post('store',            [DanhMucController::class, 'store'])->name('store');
        Route::get('show/{id}',         [DanhMucController::class, 'show'])->name('show');
        Route::get('edit/{id}',         [DanhMucController::class, 'edit'])->name('edit');
        Route::put('update/{id}',       [DanhMucController::class, 'update'])->name('update');
        Route::delete('destroy/{id}',   [DanhMucController::class, 'destroy'])->name('destroy');
        Route::get('exports',           [DanhMucController::class, 'export'])->name('export');
        Route::get('showImport',        [DanhMucController::class, 'showImport']) ->name('showImport');
        Route::post('import',           [DanhMucController::class, 'import'])->name('import');
    });
