<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WilyController;
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
Route::get('numbers', [WilyController::class, 'index'])->name('numbers.index');

Route::get('numbers/crear', [WilyController::class, 'crear'])->name('numbers.crear');

Route::post('numbers', [WilyController::class, 'mandar'])->name('numbers.mandar');

Route::get('numbers/listar', [WilyController::class, 'listar'])->name('numbers.listar');

Route::get('numbers/borrar', [WilyController::class, 'borrar'])->name('numbers.borrar');

Route::get('numbers/{number}', [WilyController::class, 'mostrar'])->name('numbers.mostrar');

Route::get('numbers/{number}/editar', [WilyController::class, 'editar'])->name('numbers.editar');

Route::put('numbers/{number}', [WilyController::class, 'actualizar'])->name('numbers.actualizar');

Route::delete('numbers/{number}', [WilyController::class, 'destruir'])->name('numbers.destruir');