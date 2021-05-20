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

Route::resource('numbers', WilyController::class);

Route::get('games', [GameController::class, 'index'])->name('games.index');

Route::get('games/{game}', [GameController::class, 'show'])->name('games.show');

Route::get('testing', [TestinController::class, 'index'])->name('testing.index');

Route::get('contacto', function () {
    $correo = new ContactoMailable;

    Mail::to('neko45slayer@gmail.com')->send($correo);

    return "Notificacion Enviada";
});