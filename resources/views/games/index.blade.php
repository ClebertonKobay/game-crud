@extends('layouts.main')

@section('title','Listagem')

@section('content')
    <div class="container">
      <header class="header">
        <h1 class="heading-list">Listagem dos jogos</h1>
        <a href="{{route('games_create')}}" class="btn btn-success">Cadastrar Novo Jogo</a>
      </header>
      <form action="">
      <div class="input-group input-group-sm mb-3" data-bs-theme="dark">
          <span class="input-group-text"  >Pesquisar:</span>
          <input type="text" class="form-control" name="search" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
      </div>
    </form>
      <table class="table table-dark table-striped">
          <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ano de criação</th>
                <th scope="col">Valor</th>
                <th scope="col">Acões</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($jogos as $jogo)
              <tr>
                <td scope="row">{{$jogo->id}}</td>
                <td scope="row">{{$jogo->name}}</td>
                <td scope="row">{{$jogo->category}}</td>
                <td scope="row">{{$jogo->creation_year}}</td>
                <td scope="row">{{$jogo->value}}</td>
                <td class="d-flex" scope="row">
                  <a href="{{route('games_edit',['id'=>$jogo->id])}}" class="btn btn-info"><ion-icon name="create-outline"></ion-icon> Editar</a>
                  <form action="{{route('games_delete',['id'=>$jogo->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@endsection