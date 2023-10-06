@extends('layouts.admin')

@section('content')
{{-- sezione vista show singolo evento --}}
<div class="container-fluid mt-4">

    {{-- riga bottoni di navigazione --}}
    <div class="row mb-3 justify-content-center flex-wrap">
        
        <div class="col-8 my-1 mx-1 col-md-3">
            
            <button class="btn btn-primary"><a class="text-light text-decoration-none" href="{{ route('admin.events.index')}}"> Torna alla Lista </a></button>

        </div>
        <div class="col-8 my-1 mx-1 col-md-3">

            <button class="btn btn-primary"><a class="text-light text-decoration-none" href="{{ route('admin.events.edit', $event)}}"> Modifica Evento </a></button>

        </div>
       
        <div class="col-8 my-1 mx-1 col-md-3">

            <form action="{{ route('admin.events.destroy', $event) }}" method="post">
            @csrf
            @method('DELETE')
   
                <button class="btn btn-primary" type="submit" onclick="return confirm('Sei sicuro di voler cancellare Evento? ')">
                    Elimina Evento
                </button>
                   
            </form> 

        </div>

    </div>

    {{-- riga contenente la singola card --}}
    <div class="row justify-content-center">

        <div class="col-md-8">
            
            <div class="card">
               
                <div class="card-body text-center">
                    <h5>{{$event->title}}</h5>
                    <p>{{$event->start_event}}</p>
                </div>

                {{-- perte contenente user registrati e se non sono registrati --}}
                <div class="card-body text-center">
                    <h6>Persone registrate per l'evento: {{count($registeredUsers)}} </h6>

                    @if ( count($registeredUsers) > 0 )
                        
                        <ul>
                            @foreach ($registeredUsers as $user)
                                <li>{{ $user->name }} - {{ $user->email }}</li>
                            @endforeach
                        </ul>

                    @else
                        <p class="text-dark">Nessun Utente è registrato per questo evento</p>
                    @endif
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection