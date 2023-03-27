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

Route::get('/games',[GamesController::class, 'index']);


Route::get('/home', function () {
    return view('games');
})->name('jogos');

Route::fallback(function(){
    return "Erro 404 página não encontrada <a href=\"/\">Retornar</a>";
});
