@extends('layouts.main')
@section('title', 'Home')
@section('title-header', 'Página Inicial')

@section('content')

    @foreach ($events as $event)
        <h3>{{ $event->title }}</h3>
        <p>{{ $event->description }}</p>
        <p>{{ $event->city }}</p>
    @endforeach
@endsection
