@extends('app')
@section('titulo','Detalhes do cliente')
@section('conteudo')
        <div class="card">
            <h5 class="card-header">Detalhes do cliente {{$client->nome}}</h5>
            <div class="card-body">
              <p class="card-text"><strong>ID:</strong>{{$client->id}}</p>
              <p class="card-text"><strong>Nome:</strong>{{$client->nome}}</p>
              <p class="card-text"><strong>Edereço:</strong>{{$client->endereco}}</p>
              <p class="card-text"><strong>Observação:</strong>{{$client->observacao}}</p>
              <br>
              <a class="btn btn-success" href="{{route('clients.index')}}">Voltar para lista</a>
            </div>
          </div>
        </div>
@endsection
