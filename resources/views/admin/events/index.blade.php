@extends('layouts.admin')

@section('content')

{{-- sezione elenco eventi --}}
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        
        {{-- titolo sezione --}}
        <div class="col-auto">
            <h4>Elenco completo eventi</h4>
        </div>

    </div>
</div>

<div class="container-fluid overflow-y-scroll mt-2">
    
    {{--row contenente eventi--}}
    <div class="row justify-content-around flex-wrap">

        @foreach ($events as $item)
            <div class="card col-md-3 mx-2 my-1 ">
                

                <div class="card-body text-center">
                    <h5>{{$item->title}}</h5>
                      
                    <p>{{$item->start_event}}</p>

                    {{-- passa alla show --}}
                    <a class="text-light text-decoration-none btn btn-primary w-100" href="{{ route('admin.events.show', $item) }}">
                        More info
                    </a>
                    

                </div>
            </div>
        @endforeach
        
    </div>
</div>
@endsection