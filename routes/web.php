<?php

use App\Http\Controllers\TestsController;
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

// Route::get('index', function () {
//     return  view('index');
// });
// Route::post('test/expots', [TestsController::class ,'export']) ->name('test');

Route::get('/', function () {
    return view('clients.dashboard');
});
