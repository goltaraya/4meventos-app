@extends('layouts.main')
@section('title', 'Editar evento')
@section('content')



    <div id="event-edit-container" class="col-md-6 offset-md-3">

        <h1>{{ $event->title }}</h1>
        <p>Edite os campos abaixo que achar necessário</p>

        <form action="/eventos/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" class="form-control-file" id="image" name="image">
                <img src="/img/{{ $event->image ? 'events/' . $event->image : 'banner.jpg' }}" alt=""
                    class="img-preview">
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}">
            </div>
            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date"
                    value="{{ $event->date->format('Y-m-d') }}">
            </div>
            <div class="form-group">
                <label for="participants">Quantidade de participantes:</label>
                <input type="text" class="form-control" id="participants" name="participants"
                    value="{{ $event->participants }}">
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ $event->city }}">
            </div>
            <div class="form-group">
                <label for="private">O evento é privado?</label>
                <select class="form-control" name="private" id="private">
                    <option value="0">Não</option>
                    <option value="1" {{ $event->private == 1 ? "selected='selected'" : '' }}>Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea class="form-control" id="description" name="description">{{ $event->description }}"</textarea>
            </div>
            <div class="form-group">
                <label for="items">Adicione itens de infraestrutura</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="items" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="items" value="Microfone"> Microfone
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="items" value="Projetor"> Projetor
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="items" value="Brindes"> Brindes
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="items" value="Café"> Café
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Editar Evento">
        </form>
    </div>


@endsection
