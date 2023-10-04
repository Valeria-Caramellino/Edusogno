@extends ('layouts.admin')

@section('content')

<div class="container-fluid mt-4">

    <div class="row">

        <div class="col-md-8">
            <h4>Benvenuto nella pagina di Modifica😀.</h4>
        </div>

    </div>
    <div class="row">
        {{-- error form --}}
        <div class="col-md-8 mx-auto my-2">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

    </div>

    <div class="row">

        <form action="{{ route("admin.events.update", $event) }}" method="post" class="needs-validation col-11 col-lg-6 mx-auto" enctype="multipart/form-data">
            @csrf
            
            @method('PUT')


            <label for="title">Titolo</label>
            
            <input type="text" name="title" id="title" value="{{ old("title") ?? $event->title }}" class="form-control mb-4 @error('title') is-invalid @enderror">

            @error("title")
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
            
            <label for="start_event">Data e Ora:</label>
            
            <input type="datetime-local" id="start_event" name="start_event" class="form-control mb-4 @error('start_event') is-invalid @enderror" value="{{ old("start_event") ?? $event->start_event }}">
            
            @error("start_event")
            <div class="invalid-feedback">{{$message}}</div>
            @enderror

            <div class="col-8 col-md-4 mx-auto">

                <button type="submit" class="text-light btn btn-primary form-control mb-4">
                    Modifica Prodotto
                </button>

            </div>

        
        </form>

    </div>
</div>

@endsection