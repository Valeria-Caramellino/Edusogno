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
            <h4>Hai già un account?</h4>
        </div>
        
        <div class="col-md-7">
            <div class="card">
                
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4 row">
                            <div class="col-md-6 mx-auto">

                              <label for="email" class="col-md-6 col-form-label text-md-right"><b>Inserisci l’e-mail</b> </label>

                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="name@example.com" required autocomplete="email" >
  
                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror

                            </div>
                            

                        </div>

                        <div class="mb-4 row">
                            
                            <div class="col-md-6 mx-auto">
                                <label for="password" class="col-md-6 col-form-label text-md-right"><b>Inserisci la password</b> </label>

                                <div class="position-relative">

                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Scrivila qui">

                                    <i id="showPw" onclick="togglePasswordVisibility()" class="fa-solid fa-eye-slash position-absolute bottom-50 end-0"></i>
                                </div>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <div class="col-md-6 mx-auto text-center offset-md-4">
                                <button type="submit" class="btn btn-primary w-100">
                                    <b>ACCEDI</b>
                                </button>

                            </div>
                        </div>

                        <div class="mb-4 row">
                            
                            <div class="col-md-8 offset-md-4">
                               
                                <p>Non hai ancora un profilo? <a class="text-dark" href="{{ route('register') }}">Registrati</a></p>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
