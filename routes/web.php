<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\WelcomeController;
use App\Models\Categ_Ingrediente;
use App\Models\Categ_Plato;
use App\Models\Ingrediente;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::resource('/platos',PlatoController::class);
Route::resource('/menus',MenuController::class);
Route::resource('/categ_ingredientes',Categ_Ingrediente::class);
Route::resource('/categ_platos',Categ_Plato::class);
Route::resource('/ingredientes',Ingrediente::class);

