@extends('web/layout')

@section('title', 'Pagina Produtos')

@section('content')
    <h1>Estamos na home e meu nome é {{ $nome }} e tenho {{ $idade }} anos</h1>

    {{-- --isso e um comentario --}}


    {{-- operador ternario --}}

    {{ isset($nome) ? 'existe' : 'nao existe' }}


    {{-- valor padrao --}}

    {{ $teste ?? 'padrao' }}
@endsection
