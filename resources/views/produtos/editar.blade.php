@extends('layouts.padrao')

@section('titulo', 'Editando o produto '. $produto->nompro)

@section('conteudo')
    <div class="row">
        <div class="col-md-12">
            <form class="form-group" 
            action="{{route('editando-produto')}}"
            method="post">
                @csrf
                <span>Nome Produto</span>
                <input
                value="{{ $produto->nompro }}"
                name="nompro" class="form-control" type="text" placeholder="Nome do produto">
                <span>Quantidade Produto</span>
                <input 
                value="{{ $produto->estpro }}"
                name="estpro" class="form-control" type="number" min="0" placeholder="Quantidade no estoque">
                
                <input 
                value="{{ $produto->codpro }}"
                class="form-control"
                type="hidden"
                name="id"/>
                <br>
                <button id="add" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>

@endsection

@extends('layouts.jogoDaVelha')