@extends('layouts.main')
@section('title','Cadastrando um jogo')

@section('content')
    <div class="container dark" >
        <header class="header">
            <h1 class="heading-list">Cadastre um novo jogo</h1>
            <a href="{{route('games_index')}}" class="btn btn-success">Voltar</a>
          </header>
        <hr>
        <form action="{{route('games_store')}}" method="POST" >
            @csrf
            <div class="input-group input-group-sm mb-3" data-bs-theme="dark">
                <span class="input-group-text"  >Nome do titulo:</span>
                <input type="text" class="form-control" name="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <div class="input-group input-group-sm mb-3" data-bs-theme="dark">
                <span class="input-group-text"  >Categoria:</span>
                <input type="text" class="form-control"name="category" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <div class="input-group input-group-sm mb-3" data-bs-theme="dark">
                <span class="input-group-text" >Ano de criação:</span>
                <input type="number" class="form-control" name="creation_year" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <div class="input-group input-group-sm mb-3" data-bs-theme="dark">
                <span class="input-group-text"  >Valor:</span>
                <input type="number" class="form-control" name="value" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <div class="input-group input-group-sm mb-3" data-bs-theme="dark">
                <input type="submit" class="form-control">
              </div>
              
        </form>
    </div>
@endsection