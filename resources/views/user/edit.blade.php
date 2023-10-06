@extends ('layouts.user')

@section('content')

{{-- sezione di modifica evento --}}
<div class="container-fluid mt-4">

    {{-- row di titolo --}}
    <div class="row">

        <div class="col-md-8 mx-auto text-center">
            <h4>Benvenuto nella pagina di Modifica Profilo.😀</h4>
        </div>

    </div>

    {{--row errore form --}}
    <div class="row">
        
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

    {{-- row contenente il form --}}
    <div class="row">

        <form action="{{ route("user.update") }}" method="post" class="needs-validation col-11 col-lg-6 mx-auto" enctype="multipart/form-data">
            @csrf
            
            @method('PUT')

            {{-- nome --}}
            <label for="name"><b>Nome</b></label>
            
            <input type="text" name="name" id="name" value="{{ old("name") ?? $user->name }}" class="form-control mb-4 @error('name') is-invalid @enderror">

            @error("name")
                <div class="invalid-feedback">{{$message}}</div>
            @enderror

            {{-- cognome --}}
            <label for="surname"><b>Cognome</b> </label>
            
            <input type="text" name="surname" id="surname" value="{{ old("surname") ?? $user->surname }}" class="form-control mb-4 @error('surname') is-invalid @enderror">

            @error("surname")
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
            
            {{-- password --}}

            <label for="password" class="col-md-6 col-form-label text-md-right"><b>Inserisci la nuova password</b></label>
                                

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Scrivila qui">
                            
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            {{-- confirm password --}}

            <label for="password-confirm" class="col-md-6 col-form-label text-md-right"><b>Conferma password</b></label>

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Scrivila qui">


            <div class="col-8 col-md-4 mx-auto mt-2">

                <button type="submit" class="text-light btn btn-primary form-control mb-4">
                    Modifica
                </button>

            </div>

        </form>

    </div>
</div>

@endsection