@extends('layouts.app')

@section('content')

<script>

function togglePasswordVisibility() {
    const passwordField = document.getElementById('password');
    const showPwIcon = document.getElementById('showPw');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        showPwIcon.classList.remove('fa-eye-slash');
        showPwIcon.classList.add('fa-eye');
    } else {
        passwordField.type = 'password';
        showPwIcon.classList.remove('fa-eye');
        showPwIcon.classList.add('fa-eye-slash');
    }
}

</script>
<div class="container">
    <div class="row py-4 justify-content-center">

        <div class="col-md-8 text-center">
            <h4>Crea il tuo account</h4>
        </div>

        <div class="col-md-7">
            <div class="card">
                
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-1 row">
                            
                            
                            <div class="col-md-6 mx-auto">
                                
                                <label for="name" class="col-md-6 col-form-label text-md-right"><b>Inserisci il nome</b></label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Mario">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-1 row">
                            
                            
                            <div class="col-md-6 mx-auto">
                                     
                                <label for="surname" class="col-md-6 col-form-label text-md-right"><b>Inserisci il cognome</b></label>

                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus placeholder="Rossi">

                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-1 row">
                            
                            <div class="col-md-6 mx-auto">
                                
                                <label for="email" class="col-md-6 col-form-label text-md-right"><b>Inserisci l’email</b></label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  required autocomplete="email" placeholder="name@example.com" >
                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-1 row">
                            
                            <div class="col-md-6 mx-auto">
                                
                                <label for="password" class="col-md-6 col-form-label text-md-right"><b>Inserisci la password</b></label>
                                

                                <div class="position-relative">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Scrivila qui">
                                    <i id="showPw" onclick="togglePasswordVisibility()" class="fa-solid fa-eye-slash position-absolute bottom-50 end-0"></i> 

                                </div>
                                
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-1 row">
                            
                            <div class="col-md-6 mx-auto">
                                   
                                <label for="password-confirm" class="col-md-6 col-form-label text-md-right"><b>Conferma password</b></label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Scrivila qui">
                            </div>

                        </div>

                        <div class="mb-4 mt-1 row">
                            <div class="col-md-6 offset-md-4 mx-auto text-center">
                                <button type="submit" class="btn btn-primary w-100">
                                    <b>REGISTRATI</b>
                                </button>
                            </div>
                        </div>

                        <div class="mb-1 row">
                            
                            <div class="col-md-8 offset-md-4">
                               
                                <a href="{{ route('login') }}" class="text-dark">Hai già un account? Accedi</a>
                    
                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
