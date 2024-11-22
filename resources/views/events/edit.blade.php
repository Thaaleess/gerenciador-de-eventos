<x-event_layout title="Gerenciar de Eventos - Editar evento">

    <h2>Editar o evento '{{ $event->name }}'</h2>
    <div class="container mt-3">
        <form action="{{ route('events.update', $event->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="eventName" class="form-label">Nome do evento</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $event->name) }}" required>
            </div>
            <div class="mb-3">
                <label for="eventDescription" class="form-label">Descrição do evento</label>
                <textarea class="form-control" id="description" name="description" rows="4" value="{{ old('description') }}" required>{{ $event->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="eventLocation" class="form-label">Local do evento</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $event->location) }}" required>
            </div>
            <div class="mb-3">
                <label for="eventDate" class="form-label">Data e horário do evento</label>
                <input type="datetime-local" class="form-control" id="date" name="date" value="{{ old('date', $event->date) }}" required>
            </div>
            <div class="mb-3">
                <label for="eventCapacity" class="form-label">Capacidade máxima (Vagas disponíveis)</label>
                <input type="number" class="form-control" id="capacity" name="capacity" value="{{ old('capacity', $event->capacity) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
          </form>
    </div>

</x-layout>