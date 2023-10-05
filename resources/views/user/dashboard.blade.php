@extends('layouts.user')

@section('content')
<div class="container-fluid mt-4">
    {{-- row titolo della sezione --}}
    <div class="row justify-content-center">
        <div class="col-md-8 mx-auto text-center my-2">
            <h4>Benvenuto {{$user->name}} {{$user->surname}}</h4>
            <h5>Elenco Eventi a cui sei iscritto </h5>
        </div>
    </div>
    
    {{-- row successo aggiunta in evento --}}
    <div class="row">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    </div>

</div>

{{-- container con scroll in modo che la pagina rimanga delle dimentioni giuste --}}
<div class="container-fluid overflow-y-scroll mt-2">
    
    {{--se l'utente si è registrato ad eventi li mostra  --}}
    @if ( count($userEvents)  > 0)
        
        <div class="row justify-content-around flex-wrap">
            
            @foreach ($userEvents as $event)
                <div class="card col-md-3 mx-2 my-1">

                    <div class="card-body text-center">
                        <h5>{{$event->title}}</h5>
                        <p>{{$event->start_event}}</p>
                    </div>

                </div>
            @endforeach

        </div>

    {{--altrimenti mostra un messaggio  --}}
    @else
        
        <div class="row">
            <div class="col-6 mx-auto text-center">
                <h5>Non ti sei ancora iscritto a nessun evento</h5>
            </div>
        </div>

    @endif


</div>

@endsection