<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\TestinController;
use App\Http\Controllers\RobotController;
use App\Http\Controllers\JuegoController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




Route::middleware('auth')->group(function () {

    Route::get('robots/create', [RobotController::class, 'create'])->name('robots.create');

    Route::post('robots', [RobotController::class, 'store'])->name('robots.store');

    Route::get('robots/{robot}/edit', [RobotController::class, 'edit'])->name('robots.edit');

    Route::put('robots/{robot}', [RobotController::class, 'update'])->name('robots.update');

    Route::delete('robots/{robot}', [RobotController::class, 'destroy'])->name('robots.destroy');

});

Route::get('robots', [RobotController::class, 'index'])->name('robots.index');

Route::get('robots/{robot}', [RobotController::class, 'show'])->name('robots.show');

Route::get('juegos', [JuegoController::class, 'index'])->name('juegos.index');

Route::get('juegos/{juego}', [JuegoController::class, 'show'])->name('juegos.show');

Route::get('contacto', function () {
    $correo = new ContactoMailable;

    Mail::to('neko45slayer@gmail.com')->send($correo);

    return "Notificacion Enviada";
});