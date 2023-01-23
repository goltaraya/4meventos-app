@extends('layouts.main')
@section('title', 'Home')

@section('content')


    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="/" method="GET">
            <input type="text" name="search" id="search" class="form-control" placeholder="Procurar">
        </form>
    </div>

    <div id="events-container" class="col-md-12">
        @if ($search)
            <h2>Buscando por: {{ $search }}</h2>
        @else
            <h2>Próximos Eventos</h2>
            <p class="subtitle">Veja os eventos que ocorrerão nos próximos dias</p>
        @endif
    </div>

    <div id="cards-container" class="row">
        @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">{{ date_format($event->date, 'd/m/Y') }}</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants">{{ $event->participants }} participantes</p>
                    <a class="btn btn-primary" href="/eventos/{{ $event->id }}">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
    @if (count($events) == 0 && $search)
        <p class="subtitle">Não foi possível encontrar nenhum evento com {{ $search }}. <a href="/">Ver
                todos</a></p>
    @elseif (count($events) == 0)
        <p class="subtitle">Ainda não existe nenhum evento cadastrado. <a href="/eventos/criar">Clique aqui para criar um.</a></p>
    @endif
@endsection
