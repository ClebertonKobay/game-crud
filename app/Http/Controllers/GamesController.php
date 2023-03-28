<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GamesController extends Controller
{
    public function index(){
        
        $jogos = Game::all();
        
        // dd($jogos);
        return view('games.index',[
            'jogos'=>$jogos,
        ]);
    }

    public function create(){
        return view('games.create');
    }
    public function store(Request $request){
        Game::create($request->all());

        return redirect()->route('games_index');
    }
}
