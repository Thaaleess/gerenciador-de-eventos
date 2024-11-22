<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddEventsRequest;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        return view('events.index');
    }

    public function create(){
        return view('events.create');
    }

    public function store(AddEventsRequest $request){
        $event = new Event();
        $event->fill($request->validated());
        $event->save();

        return to_route('events.index')->with('success', 'Evento criado com sucesso!');
    }

    public function edit(Event $event){
        return view('events.edit', compact('event'));
    }

    public function update(Event $event, AddEventsRequest $request){
        $event->update($request->validated());

        return to_route('events.show_all')->with('success','O evento foi atualizado com sucesso.');
    }

    public function destroy($id){
        $event = Event::findOrFail($id);
        $event->delete();

        return to_route('events.show_all')->with('success','Evento deletado com sucesso!');
    }

    public function showAll(){
        $events = Event::orderBy('name', 'asc')->paginate(10);

        return view('events.show_all')->with('events', $events);
    }

    public function show($id){
        $event = Event::findOrFail($id);

        return view('events.show')->with('event', $event);
    }
}
