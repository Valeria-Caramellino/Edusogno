<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fontawesome 6 cdn -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,600&display=swap" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        <div class="container-fluid vh-100">

            {{-- navbar top header --}}
            <nav class="navbar navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                        <div class="logo_edusogno">
                            <img src="{{asset('storage/logo_Edusogno.png')}}" alt="img">
                        </div>
                        
                    </a>
                </div>
            </nav>

            {{-- nav di navigazione dei contenuti --}}
            <div class="row h-100">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block navbar-dark sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            
                            <li class="nav-item">
                                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-primary' : '' }}" href="{{route('admin.dashboard')}}">
                                    <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.events.index' ? 'bg-primary' : '' }}" href="{{route('admin.events.index')}}">
                                    <i class="fa-solid fa-list" style="color: #fcfcfc;"></i> Lista Eventi
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.events.create' ? 'bg-primary' : '' }}" href="{{route('admin.events.create')}}">
                                    
                                    <i class="fa-solid fa-plus"></i> Crea Evento

                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-sign-out-alt fa-lg fa-fw"></i> {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </ul>

                    </div>
                </nav>

                {{-- contenuto del main --}}
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @yield('content')
                </main>
            </div>
        </div>

    </div>
</body>

</html>