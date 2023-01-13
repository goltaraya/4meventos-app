@extends('layouts.main')
@section('title', 'Home')
@section('title-header', 'Página Inicial')

@section('content')

    @foreach ($events as $event)
        <div class="card" style="width: 20rem; display: inline-block">
            <img class="card-img-top" src="/img/banner.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-text">{{ $event->description }}</p>
                <p class="card-text">{{ $event->city }}</p>
                <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
        </div>
    @endforeach

@endsection
