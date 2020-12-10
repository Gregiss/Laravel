@extends('layouts.padrao')

@if ($pesquisa == '')
    @section('titulo', 'Não foi encontrado em nosso banco de dados')
@else
    @section('titulo', 'Não foi encontrado "'.$pesquisa.'" em nosso banco de dados')
@endif

<style>
.error{
    margin: 0px auto;
    position: absolute;
    width: 100%;
    background-image: url('../../404.jpg');
    height: 100%;
    background-repeat: no-repeat;
    background-position: center;
    left: 0%;
}

body{
    overflow: hidden;
}

.error h1{
    color: rgba(0,0,0,.60);
    font-size: 18px;
    max-width: 430px;
    position: absolute;
    left: 32%;
    top: 13%;
    color: #9147ff;
    background: rgb(233 237 288);
    padding: 10px;
}
</style>

<div class="error">
    <h1>Desculpe. A menos que você tenha uma máquina do tempo, esse conteúdo está indisponível.</h1>
</div>