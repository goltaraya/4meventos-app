@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')

    <div class="page-header">
        <h1>Seus eventos</h1>
        <p>Abaixo se encontram os eventos que você criou.</p>
    </div>

    <div class="table">
        <table class="table table-hover">
            <thead>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Local</th>
                <th scope="col">Data</th>
                <th scope="col">Participantes</th>
                <th scope="col">Opções</th>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->id }}</td>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->city }}</td>
                        <td>{{ date_format(new DateTime($event->date), 'd/m/Y') }}</td>
                        <td>{{ $event->participants }}</td>
                        <td>
                            <a href="#">Atualizar</a>
                            <a href="#">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
