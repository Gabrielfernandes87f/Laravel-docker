<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

use App\Models\User;

class EventController extends Controller
{
    public function index() {

        $search = request('search');

        if($search) {

            $events = Event::where([
             ['title', 'like', '%'.$search.'%']
            ])->get();
            
        } else {
            $events = Event::all();
        }

        return view('welcome',['events' => $events, 'search' => $search]);
    } 

    public function create () {

        return view('events.create');
    }


    public function store(Request $request) {
        $event = new Event;

        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        // image upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalname() . strtotime("now")) . "." . $extension;
            $request->image->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');

    }


    
    public function produtos () {

        $busca = request('search');

        return view('products', ['busca' => $busca]);
    }
    public function contato () {
        return view('contact');
    }

    public function produtosteste ($id = 1) {
        return view('product', ['id' => $id]);
    }

    public function show ($id) {
        $event = Event::findOrFail($id);

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);

    }
    public function dashboard() {

        $user = auth()->user(); // pega usuario autenticado

        $events = $user->events; // usuario do evento | foi criado um métado no Model pra usar assim

        return view('events.dashboard', ['events' => $events]);
    }
    public function destroy($id) {

        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Evento excluído com Sucesso');
    }
    public function edit($id) {

        $event = Event::findOrFail($id);

        return view('events.edit', ['event' => $event]);
    }
    public function update(Request $request) {

        Event::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard')->with('msg', 'Evento editado com Sucesso');

    }
    public function joinEvent($id) {

        $user = auth()->user();

        $user->eventsAsParticipant()->attach($id);

        $event = Event::findOrFail($id);

        return redirect('/dasboard')->with('msg', 'Sua presença está confirmada no evento' . $event->title);
    }
}
