<?php

use App\Http\Controllers\TipoController;
use Illuminate\Support\Facades\Route;

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

/** 
 * Um grupo
 * Rota protegida
 * rota com prefixo
 * backoffice.home */

Route::get('/', function () {
    return view('index');
})->name('home');

//Get
Route::get('/tipos', [TipoController::class, 'index'])
    ->name('tipos.index');

Route::get('/tipos/create', [TipoController::class, 'create'])
    ->name('tipos.create');

Route::get('/tipos/edit/{tipo}', [TipoController::class, 'edit'])
    ->name('tipos.edit');

Route::get('/tipos/show/{tipo}', [TipoController::class, 'show'])
    ->name('tipos.show');
//Post
Route::post('/tipos', [TipoController::class, 'store'])->name('tipos.store');
//Put
//Delete

//Route::resources('/tipos',TipoController::class);