@extends('master')
@section('titulo','Novo Automóvel')
@section('conteudo')
<header>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Lista de Todos os veiculos</h1>
            <p class="lead">Dados cadastrais do veiculo <i>#</i><b>{{ $automovel->id }}</b> - <b>{{ $automovel->marca }}</b></p>
        </div>
    </div>
</header>
@foreach($errors->all() as $error)
<div class="alert alert-primary" role="alert">
    <p>{{$error}}</p>
</div>
@endforeach
<section>
    <div class="container">
        <div class="d-flex flex-column align-items-center mb-2">
            <h2 class="text-muted text-center mb-4">Formulario</h2>
            <a href="/" class="btn btn-dark w-25">Voltar para lista</a>
        </div>
        <form method="post" class="container" action="/automovel/{{$automovel->id}}">
            @csrf
            @method("put")
            <div class="container">

                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="marca">Marca do veiculo:</label>
                        <input type="text" class="form-control" id="marca" name="marca" placeholder="Digite a marca do veiculo" value="{{$automovel->marca}}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="modelo">Modelo do veiculo:</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Digite o modelo do veiculo" value="{{$automovel->modelo}}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="placa">Placa do Veiculo</label>
                        <input type="text" class="form-control" id="placa" name="placa" placeholder="Digite a placa do veiculo" value="{{$automovel->placa}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="valor-venda">Valor de venda (R$)</label>
                        <input type="number" class="form-control" id="valor-venda" name="vl_venda" placeholder="Digite o valor para venda (R$)" value="{{$automovel->vl_venda}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="data-fabricacao">Data de fabricação do veiculo:</label>
                        <input type="date" class="form-control" id="data-fabricacao" name="dt_fabricacao" max="" value="{{$automovel->dt_fabricacao}}">
                    </div>
                </div>
                <div class="form-row mt-2">
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-secondary w-100 mb-3">Limpar</button>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info w-100">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
