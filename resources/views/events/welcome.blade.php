@extends('layouts.main')
@section('title', 'Home')
@section('title-header', 'Página Inicial')

@section('content')


    <h3>Evento: {{ $evento }}</h3>
    <p>Local: {{ $local }}</p>
    <p>Solicitante: {{ $solicitante }}</p>
@endsection
