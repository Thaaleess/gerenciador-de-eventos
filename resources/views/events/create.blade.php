<x-event_layout title="Gerenciar de Eventos - Index">

    <h2>Cadastrar Evento</h2>
    <div class="container mt-3">
        <form action="{{ route('events.store') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="eventName" class="form-label">Nome do evento</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="mb-3">
                <label for="eventDescription" class="form-label">Descrição do evento</label>
                <textarea class="form-control" id="description" name="description" rows="4" value="{{ old('description') }}" required></textarea>
            </div>
            <div class="mb-3">
                <label for="eventLocation" class="form-label">Local do evento</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}" required>
            </div>
            <div class="mb-3">
                <label for="eventDate" class="form-label">Data e horário do evento</label>
                <input type="datetime-local" class="form-control" id="date" name="date" value="{{ old('date') }}" required>
            </div>
            <div class="mb-3">
                <label for="eventCapacity" class="form-label">Capacidade máxima (Vagas disponíveis)</label>
                <input type="number" class="form-control" id="capacity" name="capacity" value="{{ old('capacity') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
    </div>

</x-layout>