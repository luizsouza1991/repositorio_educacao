@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $objeto->titulo }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-8">
                            <p><b>Título: </b>{{ $objeto->titulo }}</p>
                            <p><b>Tipo: </b>{{ $objeto->tipo }}</p>
                            <p><b>Objetivo: </b>{{ $objeto->objetivo }}</p>
                            <p><b>Descrição: </b>{{ $objeto->descricao }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('auth.register')
    @include('auth.login')
</div>
@endsection