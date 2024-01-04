<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route:: get('/', [CrudController::class, 'index'])->name('index');
Route:: post('/', [CrudController::class, 'create']);
Route:: get('/edit/{id}', [CrudController::class, 'edit']);
Route::put('/edit/{id}', [CrudController::class, 'update']);
Route::get('delete/{id}', [CrudController::class, 'destroy'])->name('delete');

