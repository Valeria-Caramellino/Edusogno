<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $events = Event::all();

        return view('user.events.index', compact( 'user','events' ));
    }

    public function joinEvent(Request $request)
    {

        $event = Event::find($request->event_id);
    
        if (!$event) {
            return redirect()->route('user.events.index')->with('error', 'Evento non trovato');
        }
    
        auth()->user()->events()->attach($event);
    
        return redirect()->route('user.dashboard')->with('success', 'Utente aggiunto all\'evento');
    }


}
