@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <button class="btn btn-primary"><a class="text-light" href="{{ route('admin.events.index')}}"> Torna alla Lista </a></button>
        
        <button class="btn btn-primary"><a class="text-light" href="{{ route('admin.events.edit', $event)}}"> Modifica Evento </a></button>
       
        <form action="{{ route('admin.events.destroy', $event) }}" method="post">
            @csrf
            @method('DELETE')

                <button class="btn btn-primary" type="submit" onclick="return confirm('Sei sicuro di voler cancellare Evento? ')">
                    Elimina Evento
                </button>
                
        </form> 

    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header"> {{$event->title}}</div>

                <div class="card-body">
                   {{$event->start_event}}
                </div>
                <div class="card-body">
                    <p>Persone registrate per l'evento</p>

                    @if ( count($registeredUsers) > 0 )
                        
                        <ul>
                            @foreach ($registeredUsers as $user)
                                <li>{{ $user->name }} - {{ $user->email }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>Nessun Utente è registrato per questo evento</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection