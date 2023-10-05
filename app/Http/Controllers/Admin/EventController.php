<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $events = Event::all();

        return view('admin.events.index', compact( 'user','events' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $events = Event::all();

        return view('admin.events.create', compact( 'user','events' ));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {

        $data = $request->validated();

        $date = $request->start_event;
        $formattedDateTime = str_replace("T", " ", $date);
        
        $newEvent = new Event();
        $newEvent->fill($data);
        $newEvent->start_event = $formattedDateTime;
       
        $newEvent->save();
        
        return to_route ("admin.events.show", $newEvent );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $registeredUsers = $event->users;
        return view('admin.events.show', compact('event', 'registeredUsers'));

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $user = Auth::user();

        return view('admin.events.edit', compact( 'user','event' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $data = $request->validated();
        
        $date = $request->start_event;
        $formattedDateTime = str_replace("T", " ", $date);
       
        $event->fill($data);
        $event->start_event = $formattedDateTime;
       
        $event->update();

        return to_route("admin.events.show" , $event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index');
    }
}
