<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WilyController;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;
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

Route::get('numbers/listar', [WilyController::class, 'listar'])->name('numbers.listar');

Route::get('numbers/borrar', [WilyController::class, 'borrar'])->name('numbers.borrar');

Route::resource('numbers', WilyController::class);

Route::get('contacto', function () {
    $correo = new ContactoMailable;

    Mail::to('neko45slayer@gmail.com')->send($correo);

    return "Mensaje Enviado";
});

