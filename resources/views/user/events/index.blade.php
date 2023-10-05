@extends('layouts.user')

@section('content')

<div class="container-fluid mt-4">
    
    {{-- row titolo della sezione --}}
    <div class="row justify-content-center">      
        <div class="col-auto">
            <h4>Elenco di tutti gli Eventi</h4>
        </div>
    </div>
    
    {{-- row insuccesso aggiunta in evento --}}
    <div class="row">
            
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    
    </div>
    
</div>

{{-- container con scroll in modo che la pagina rimanga delle dimentioni vh --}}
<div class="container-fluid overflow-y-scroll mt-2">
    
    <div class="row justify-content-around flex-wrap">
        
        {{-- elenco eventi --}}

        @foreach ($events as $item)
            <div class="card col-md-3 mx-2 my-1">

                <div class="card-body text-center">

                    <h5>{{$item->title}}</h5>
                    <p>{{$item->start_event}}</p>

                    <form  action="{{ route('user.events.join') }}" method="POST">
                        @csrf
                        <input type="hidden" name="event_id" value="{{ $item->id }}">
        
                        <button type="submit" class="btn btn-primary w-100">
                            JOIN
                        </button>
                    </form>

                </div>
           
            </div>
        @endforeach
    
    </div>
</div>
@endsection