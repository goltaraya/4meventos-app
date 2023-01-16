@extends('layouts.main')
@section('title', $event->title)
@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-fluid">
            </div>

            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city">
                    <ion-icon name="location-outline"></ion-icon> {{ $event->city }}
                </p>
                <p class="event-participants">
                    <ion-icon name="people-outline"></ion-icon> {{ $event->participants }} participantes
                </p>
                <p class="event-owner">
                    <ion-icon name="cafe-outline"></ion-icon> Dono do evento
                </p>
                <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
            </div>
            <div id="description-container" class="col-md-12">
                <h3>Sobre o evento:</h3>
                <p class="event-description">
                    {{ $event->description }}
                </p>
            </div>

        </div>
    </div>

@endsection
