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
    Route::get('/{id}/edit',[GamesController::class,'edit'])->where('id','[0-9]+')->name('games_edit');
    Route::put('/{id}',[Gamescontroller::class,'update'])->where('id','[0-9]+')->name('games_update');
    Route::delete('/{id}',[Gamescontroller::class,'destroy'])->where('id','[0-9]+')->name('games_update');
});


Route::fallback(function(){
    return view('erro');
});
