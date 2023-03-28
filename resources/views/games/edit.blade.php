@extends('layouts.main')

@section('title','Editando: ' . $game->name)


@section('content')
    <div class="container dark" >
        <header class="header">
            <h1 class="heading-list">Editando o jogo: {{$game->name}}</h1>
            <a href="{{route('games_index')}}" class="btn btn-success">Voltar</a>
          </header>
        <hr>

        <form action="{{route('games_update',['id'=>$game->id])}}" method="POST" >
            @csrf
            @method('PUT')
            <div class="input-group input-group-sm mb-3" data-bs-theme="dark">
                <span class="input-group-text"  >Nome do titulo:</span>
                <input type="text" class="form-control" name="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{ $game->name }}">
              </div>
              <div class="input-group input-group-sm mb-3" data-bs-theme="dark">
                <span class="input-group-text"  >Categoria:</span>
                <input type="text" class="form-control"name="category" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{ $game->category }}">
              </div>
              <div class="input-group input-group-sm mb-3" data-bs-theme="dark">
                <span class="input-group-text" >Ano de criação:</span>
                <input type="number" class="form-control" name="creation_year" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"value="{{ $game->creation_year }}">
              </div>
              <div class="input-group input-group-sm mb-3" data-bs-theme="dark">
                <span class="input-group-text"  >Valor:</span>
                <input type="number" class="form-control" name="value" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{ $game->value }}">
              </div>
              <div class="input-group input-group-sm mb-3" data-bs-theme="dark">
                <input type="submit" class="form-control" value="Atualizar">
              </div>
        </form>
    </div>
@endsection