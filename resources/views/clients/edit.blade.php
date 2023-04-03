@extends('app')
@section('titulo','Editar Cliente')
@section('conteudo')
<form action="{{route('clients.update',$client)}}" method="POST">
    @csrf
    @method('PUT')
    <h1>Editar Cliente</h1>
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" value="{{$client->nome}}" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
    </div>
    <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" class="form-control"  value="{{$client->endereco}}" id="endereco"  name="endereco" placeholder="Digite o endereço">
    </div>
    <div class="mb-3">
        <label for="observacao" class="form-label">Obervação</label>
    <textarea class="form-control" id="observacao" name="observacao" rows="3" placeholder="Digite a observação" >{{$client->observacao}}
    </textarea>
    </div>
    <button class="btn btn-success" type="submit">Enviar</button>
</form>


@endsection
