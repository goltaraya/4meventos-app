@extends('layouts.main')
@section('title', 'Criar Evento')
@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Criar Evento</h1>
        <form action="/eventos" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento:">
            </div>
            <div class="form-group">
                <label for="participants">Quantidade de participantes:</label>
                <input type="text" class="form-control" id="participants" name="participants"
                    placeholder="Quantidade de participantes">
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Cidade">
            </div>
            <div class="form-group">
                <label for="private">O evento é privado?</label>
                <select class="form-control" name="private" id="private">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea class="form-control" id="description" name="description" placeholder="O que acontecerá no evento?"></textarea>
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
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>

@endsection
