@extends('layouts.app')

@section('content')

    <div class="container offline">
        <div class="row my-4">
            <div class="col text-center">
                <img src="{{ asset('/theme/images/logo.png') }}" alt="{{ config('app.name') }}" class="img-fluid" width="40%">
                <h1 class="text-muted mt-4">No estás conectado a internet</h1>
            </div>
        </div>
    </div>

@endsection
