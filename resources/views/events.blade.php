@extends('layouts.main')
@section('title', 'Eventos')
@section('title-header', 'Eventos')
@section('content')

    @if ($search !== null)
        <h3>Resultado da pesquisa: {{ $search }}</h3>
    @endif

@endsection
