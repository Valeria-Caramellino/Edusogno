@extends('layouts.admin')

@section('content')
{{-- sezione entrata admin --}}
<div class="container-fluid mt-4">

    <div class="row justify-content-center align-items-center">
       
        <div class="col-md-8">

            <h4>Buongiorno Admin: {{$user->name}} {{$user->surname}} cosa facciamo oggi?</h4>
            <h4 class="text-center">👈😉</h4>

        </div>
    
    </div>
</div>
@endsection