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
                    <ion-icon name="cafe-outline"></ion-icon> {{ $eventOwner['name'] }}
                </p>
                <p class="event-date">
                    <ion-icon name="calendar-outline"></ion-icon> {{ date_format($event->date, 'd/m/Y') }}
                </p>
                <form action="/eventos/join/{{ $event->id }}" method="POST">
                    @csrf
                    <a href="/eventos/join/{{ $event->id }}"
                        class="btn btn-primary"
                        id="event-submit"
                        onclick="event.preventDefault();
                        this.closest('form').submit();
                        ">
                        Confirmar Presença
                    </a>
                </form>
                @if ($event->items != null)
                    <div class="items-container">
                        <h3>Itens do evento:</h3>
                        <ul id="items-list">
                            @foreach ($event->items as $item)
                                <li>
                                    <ion-icon name="chevron-forward-outline"></ion-icon> <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
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
