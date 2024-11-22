<x-event_layout title="Gerenciar de Eventos - Lista de Eventos">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Lugar</th>
                <th scope="col">Dia e hora</th>
                <th scope="col">Capacidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <th>
                        <form action="{{ route('events.show', $event->id) }}" method="get">
                            <button class="btn btn-info btn-sm">
                                <i class="bi bi-eye-fill"></i>
                            </button>
                        </form>
                    </th>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->location }}</td>
                    <td>{{ $event->date }}</td>
                    <td>{{ $event->capacity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center" style="display: flex; justify-content: center;">
        {{ $events->links() }}
    </div>   

</x-event_layout>