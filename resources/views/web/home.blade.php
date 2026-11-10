@extends('web/layout')

@section('title', 'Pagina Produtos')

@section('content')

{{-- esturtura de repetição --}}
@php
$i = 0;
@endphp

@while ($i <= 10)
{{ $i }}
@php $i++ @endphp
@endwhile

@endsection
