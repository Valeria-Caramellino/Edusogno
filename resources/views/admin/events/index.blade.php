@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div>
                <h4>Elenco completo eventi</h4>
            </div>

            @foreach ($events as $item)
            <div class="card">
                <div class="card-header">  <p>{{$item->title}}</p> </div>

                <div class="card-body">
                    
                      
                    <p>{{$item->start_event}}</p>

                    <button class="btn btn-primary ">
                        <a class="text-light" href="{{ route('admin.events.show', $item) }}">
                        More info
                        </a>
                    </button>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection