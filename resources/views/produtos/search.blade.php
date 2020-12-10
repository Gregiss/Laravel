@extends('layouts.padrao')

@section('titulo', 'Pesquisa')

@section('conteudo')
    <div class="row">
        <div class="col-md-12">
            @if (count($produtos) == 0)
                <h3 class="title">Nenhum busca encontrada para {{ $nome }}</h3>
            @else
            @if ($nome == '')
            <h3>Todos os produtos disponiveis</h3>
            @else
            <h3>Busca por {{ $nome }}</h3>  
            @endif
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Estoque</th>
                        <th scope="col">Deletar</th>
                        <th>Editar</th>
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
                        <th scole="col">
                            <form method="post" 
                            action="{{ route('search-produto') }}">
                            @csrf
                            <input type="hidden" name="codpro" value="{{ $produto->codpro }}"/>
                            <button class="btn btn-danger">Deletar</button>
                            </form>  
                        </th>
                        <th>
                        <a class="left"
                        href="{{ route('editar-produto') }}?id={{ $produto->codpro  }}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        </th>
                    </tr>
                @endforeach 
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('layouts.jogoDaVelha')