@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')

    <div class="col-md-10 offset-md-1 page-header">
        <h1>Seus eventos</h1>
        <p>Abaixo se encontram os eventos que você criou.</p>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if (count($events) > 0)
            <table class="table table-hover">
                <thead>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data</th>
                    <th scope="col">Opções</th>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ date_format(new DateTime($event->date), 'd/m/Y') }}</td>
                            <td>
                                <a href="#" class="btn btn-success update-btn">
                                    <ion-icon name="pencil-outline"></ion-icon> Editar
                                </a>
                                <form action="/eventos/{{ $event->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn">
                                        <ion-icon name="trash-outline"></ion-icon> Deletar
                                    </button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Você não cadastrou nenhum evento ainda. Clique aqui para <a href="/eventos/criar">cadastrar</a></p>
        @endif
    </div>

@endsection
