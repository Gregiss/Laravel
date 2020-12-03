@extends('layouts.padrao')

@section('titulo', 'Lista de produtos')

@section('conteudo')
    <div class="row">
        <div class="col-md-12">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Estoque</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <th scope="col">
                            {{ $produto->codpro }}
                        </th>
                        <th scope="col">
                            {{ $produto->nompro }}
                        </th>
                        <th scope="col">
                            {{ $produto->estpro }}
                        </th>
                    </tr>
                @endforeach 
                </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('layouts.jogoDaVelha')