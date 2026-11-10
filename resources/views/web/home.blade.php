@extends('web/layout')

@section('title', 'Pagina Produtos')

@section('content')

{{-- esturtura de repetição --}}

@for ($i = 0; $i <=10; $i++ )
 valor {{ $i }}
@endfor

@endsection
