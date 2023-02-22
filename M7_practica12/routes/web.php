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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/*
Route::prefix("adb")->group(function() {
    Route::get('/clientes', [ControladorAdmin::class, 'clientes']);
    Route::get('/facturacion', [ControladorAdmin::class, 'facturacion']);
    Route::get('/contabilidad', [ControladorAdmin::class, 'contabilidad']);
});*/