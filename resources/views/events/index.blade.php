@extends('layouts.main')
@section('title', 'Home')

@section('content')


    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" name="search" id="search" class="form-control" placeholder="Procurar">
        </form>
    </div>

    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p>Veja os eventos que ocorrerão nos próximos dias</p>
    </div>

    <div id="cards-container" class="row">
        @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">10/01/2023</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants">{{ $event->participants }} participantes</p>
                    <a class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
