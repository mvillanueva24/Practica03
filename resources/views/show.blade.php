@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @foreach ($songs as $song)
        <div class="row align-items-center h-100">
            <div class="card col-md-8 mx-auto">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $song->title }}
                        <button type="button">Editar</button>
                        <button type="button">eliminar</button>
                    </h5>
                </div>
            </div>  
        </div>
        @endforeach
    </div>
@endsection
