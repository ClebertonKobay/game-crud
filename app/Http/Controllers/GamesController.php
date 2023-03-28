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

    public function edit($id){
        $game = Game::where('id',$id)->first();

        if(!empty($game)){
            return view('games.edit',[
                'game'=>$game,
            ]);
        }else{
            return redirect()->route('games_index');
        }

        return redirect()->back();
    }

    public function update(Request $request,$id){
        $data =[
            'name' => $request->name,
            'category' => $request->category,
            'creation_year' => $request->creation_year,
            'value'=> $request->value
        ];

        Game::where('id',$id)->update($data);

        return redirect()->route('games_index');
    }
    public function destroy($id){
        $game = Game::where('id',$id)->first();

        if(!empty($game)){
            Game::where('id',$id)->delete();
            return redirect()->route('games_index');

        }else{
            return redirect()->route('games_index');
        }
    }
}
