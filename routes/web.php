<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;
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


Route::get('/', [CursosController::class, 'inicio']);

Route::get('/quienes-somos', [CursosController::class, 'quienes'])->name('nosotros');

Route::get('/lista/{lista}', [CursosController::class, 'listado'])->name('lista');

Route::get('/{especialidad}/{curso}', [CursosController::class, 'detalle']);    

Route::get('/contacto', [CursosController::class, 'contacto'])->name('contacto');
Route::post('/contacto/procesar',[CursosController::class,'contacto']);