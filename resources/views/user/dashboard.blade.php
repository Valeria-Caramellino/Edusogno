@extends('layouts.user')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 mx-auto text-center my-2">
            <h3>Benvenuto {{$user->name}} {{$user->surname}}</h3>
            <h5>Elenco Eventi a cui sei iscritto </h5>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="row justify-content-around">
        
    @if ( count($userEvents)  > 0)
    
        @foreach ($userEvents as $event)
        <div class="card">
            <div class="card-header">
                <p>{{$event->title}}</p>
            </div>
            <div class="card-body">
                <p>{{$event->start_event}}</p>
            </div>
        </div>
        @endforeach

    @else
    <h4>non sei ancora registrato a nessun evento</h4>
    @endif

    
        
    </div>
</div>
@endsection