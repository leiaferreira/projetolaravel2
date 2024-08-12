<?php

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

use App\Http\controllers\Eventcontroller;

Route::get('/', [Eventcontroller::class, 'index']);

Route::get('/cadastro', [Eventcontroller::class,'cadastra']);

Route::get('/evento1/criarevento', [Eventcontroller::class, 'createevents'])->middleware('auth');
Route::get('/evento1/{id}', [Eventcontroller::class, 'show']);

Route::get('/entrar', [Eventcontroller::class, 'entrar']);

Route::post('/evento1/criarevento',[Eventcontroller::class, 'store']);
Route::get('/evento1/dashboard', [Eventcontroller::class, 'dashboard'])->middleware('auth');


