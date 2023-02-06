<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Event, User};
use PHPUnit\Util\InvalidDataSetException;
use Ramsey\Uuid\Exception\DateTimeException;
use Spatie\FlareClient\Http\Exceptions\InvalidData;
use TheSeer\Tokenizer\Exception;


class EventController extends Controller
{
    public function index()
    {
        $search = request('search');

        if ($search) {
            $events = Event::where([
                [
                    'title',
                    'like',
                    '%' . $search . '%'
                ]
            ])->get();
        } else {
            $events = Event::all();
        }


        return view('events.index', ['events' => $events, 'search' => $search]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->participants = $request->participants;
        $event->items = $request->items;

        $event->date = $request->date;

        // Image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $requestImage->move(public_path('/img/events'), $imageName);

            $event->image = $imageName;
        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id)
    {

        $event = Event::findOrFail($id);
        $user = auth()->user();
        $hasUserJoined = false;

        if ($user) {
            $userEvents = $user->eventsAsParticipant->toArray();
            foreach ($userEvents as $userEvent) {
                if ($userEvent['id'] == $id) {
                    $hasUserJoined = true;
                }
            }
        }


        $eventOwner = User::where('id', $event->user_id)
            ->first()
            ->toArray();
        return view(
            'events.show',
            [
                'event' => $event,
                'eventOwner' => $eventOwner,
                'hasUserJoined' => $hasUserJoined
            ]
        );
    }

    public function dashboard()
    {
        $user = User::find(auth()->user()->id);
        $events = Event::where('user_id', $user->id)->get();
        $eventsAsParticipant = $user->eventsAsParticipant;

        return view('dashboard', ['events' => $events, 'eventsAsParticipant' => $eventsAsParticipant]);
    }

    public function destroy($id)
    {
        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('mgs', 'Evento deletado com sucesso.');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', ['event' => $event]);
    }

    public function update(Request $request)
    {
        $event = Event::findOrFail($request->id)->update($request->all());
        return redirect('/dashboard')->with('msg', 'Evento editado com sucesso!');
    }

    public function joinEvent($id)
    {
        $user = User::find(auth()->user()->id);
        $user->eventsAsParticipant()->attach($id);

        $event = Event::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Sua presença foi confirmada no evento ' . $event->title);
    }

    public function leaveEvent($id)
    {
        $user = auth()->user();
        $user->eventsAsParticipant()->detach($id);
        $event = Event::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Inscrição cancelada no evento ' . $event->title);
    }
}
