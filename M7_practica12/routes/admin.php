<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;
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

// Agrupar las rutas del administrador utilizando el middleware adb
Route::group(['middleware' => ['adb']], function(){
    // Ruta para mostrar la página de clientes
    Route::get('/clientes', [ControladorAdmin::class, 'clientes']);
    // Ruta para mostrar la página de facturación
    Route::get('/facturacion', [ControladorAdmin::class, 'facturacion']);
    // Ruta para mostrar la página de contabilidad
    Route::get('/contabilidad', [ControladorAdmin::class, 'contabilidad']);
});
