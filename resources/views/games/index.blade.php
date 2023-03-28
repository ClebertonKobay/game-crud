@extends('layouts.main')

@section('title','Listagem')

@section('content')
    <h1 class="heading-list">Listagem dos jogos</h1>
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
              <td scope="row"><a href="#">Editar</a><a href="#">Deletar</a></td>
            </tr>
            @endforeach
          </tbody>
      </table>
@endsection