<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
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

Route::prefix('games')->group(function(){
    Route::get('/',[GamesController::class,'index'])->name('games_index');
    Route::get('/create',[GamesController::class,'create'])->name('games_create');
    Route::post('/',[GamesController::class,'store'])->name('games_store');
});


Route::fallback(function(){
    return "Erro 404 página não encontrada <a href=\"/\">Retornar</a>";
});
