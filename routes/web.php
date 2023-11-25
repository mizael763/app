<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*=========================subir producto===================*/
// routes/web.php

use App\Http\Controllers\ProductoController;

Route::get('/crear-producto', [ProductoController::class, 'create'])->name('crear-producto');
Route::post('/guardar-producto', [ProductoController::class, 'store'])->name('guardar-producto');



