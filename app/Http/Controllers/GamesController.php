<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(){
        // dd('Olá Mundo');
        return view('games');
    }
}