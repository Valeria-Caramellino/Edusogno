@extends('layouts.user')

@section('content')
<div class="container-fluid mt-4">
    <h5>Elenco di tutti gli Eventi</h5>
    <div class="row justify-content-around">
        
        
        @foreach ($events as $item)
        <div class="card col-auto">
            <div class="card-header">
                <p>{{$item->title}}</p>
            </div>
            <div class="card-body">
                <p>{{$item->start_event}}</p>
            </div>
            <div class="card-footer">
                
                <form  action="{{ route('user.events.join') }}" method="POST">
                    @csrf
                    <input type="hidden" name="event_id" value="{{ $item->id }}">

                    <button type="submit" class="btn btn-primary">
                        JOIN
                    </button>
                </form>

            </div>
        </div>
        @endforeach


    
    </div>
</div>
@endsection