<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WilyController;
use App\Http\Controllers\GameController;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\TestinController;

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

    Route::get('numbers/create', [WilyController::class, 'create'])->name('numbers.create');

    Route::post('numbers', [WilyController::class, 'store'])->name('numbers.store');

    Route::get('numbers/{number}/edit', [WilyController::class, 'edit'])->name('numbers.edit');

    Route::put('numbers/{number}', [WilyController::class, 'update'])->name('numbers.update');

    Route::delete('numbers/{number}', [WilyController::class, 'destroy'])->name('numbers.destroy');

});

Route::get('numbers', [WilyController::class, 'index'])->name('numbers.index');

Route::get('numbers/{number}', [WilyController::class, 'show'])->name('numbers.show');

Route::get('games', [GameController::class, 'index'])->name('games.index');

Route::get('games/{game}', [GameController::class, 'show'])->name('games.show');

Route::get('contacto', function () {
    $correo = new ContactoMailable;

    Mail::to('neko45slayer@gmail.com')->send($correo);

    return "Notificacion Enviada";
});