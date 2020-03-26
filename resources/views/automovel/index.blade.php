@extends('master')
@section('titulo','Automóveis')
@section('conteudo')
<header>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Lista de Todos os veiculos</h1>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-4">
            <a href="/automovel/create" class="btn btn-primary">Cadastrar Veiculo</a>
        </div>
    </div>

    <div class="row">
        @foreach($automoveis as $automovel)
        <div class="col-md-4">
            <div class="card w-100">
                <div class="card-header">
                    <div class="card w-100">
                        <div class="btn btn-group">
                            <a href="/automovel/{{$automovel->id}}" class="btn btn-info">Visualizar</a>
                            <a href="/automovel/{{$automovel->id}}/edit" class="btn btn-warning">Editar</a>
                            <form action="{{ route('automovel.destroy', $automovel->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Excluir</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$automovel->modelo}}</h5>
                    <p class="card-text">{{$automovel->marca}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <span class="font-weight-bold">R$</span> {{$automovel->vl_venda}}</li>
                    <li class="list-group-item">{{$automovel->dt_fabricacao}}</li>
                    <li class="list-group-item">{{$automovel->placa}}</li>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
