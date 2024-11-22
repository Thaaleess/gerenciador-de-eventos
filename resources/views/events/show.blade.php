<x-event_layout title="Gerenciador de Eventos - Visualizar evento">

    <h1 class="mb-3">Nome do evento: {{ $event->name }}</h1>
    <p>Descrição: {{ $event->description }}</p>
    <p>Local: {{ $event->location }}</p>
    <p>Data e hora: {{ $event->date }}</p>
    <p>Capacidade: {{ $event->capacity }}</p>

    <div class="button-container">
        <form action="{{ route('events.edit', $event->id) }}" method="get">
            <button class="btn btn-primary btn-sm">
                <i class="bi bi-pencil-fill"></i>
            </button>
        </form>
        <form action="{{ route('events.destroy', $event->id) }}" method="post" onsubmit="return confirm('Você tem certeza que deseja deletar este evento?');">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">
                <i class="bi bi-trash-fill"></i>
            </button>
        </form>
    </div>

</x-event_layout>