@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Aqui entra algum texto</div>

                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'route' => ['register']]) !!}
                        @csrf
                        <div class="form-group row justify-content-md-center">
                            <div class="col-md-8">
                                {!! Form::label('titulo', 'Título do recurso') !!}
                                {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group row justify-content-md-center">
                            <div class="col-md-8">
                                {!! Form::label('tipo', 'Tipo do recurso') !!}
                                {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group row justify-content-md-center">
                            <div class="col-md-8">
                                {!! Form::label('objetivo', 'Objetivo') !!}
                                {!! Form::text('objetivo', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group row justify-content-md-center">
                            <div class="col-md-8">
                                {!! Form::label('descricao', 'Descrição Geral do Recurso') !!}
                                {!! Form::textarea('descricao', null, ['class' => 'form-control', 'rows' => '3']) !!}
                            </div>
                        </div>

                        <div class="form-group row justify-content-md-center">
                            <div class="col-md-8">
                                {!! Form::label('area_computacao', 'Área da computação') !!}
                                {!! Form::text('area_computacao', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group row justify-content-md-center">
                            <div class="col-md-8">
                                {!! Form::label('autor', 'Autor') !!}<br>
                                {!! Form::checkbox('autor', 'self') !!} Eu sou o(a) autor(a) deste recurso<br>
                                {!! Form::checkbox('autor', 'other') !!} Outro
                                {!! Form::text('autores', null, ['class' => 'form-control', 'placeholder' => 'Informe os autores']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group row justify-content-md-center">
                            <div class="col-md-8">
                                {!! Form::label('idiomas', 'Idiomas') !!}
                                {!! Form::select('idiomas', [
                                    'portugues' => 'Português',
                                    'ingles' => 'Inglês',
                                    'espanhol' => 'Espanhol'
                                ], null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group row justify-content-md-center">
                            <div class="col-md-8">
                                {!! Form::label('palavra_chave', 'Palavras-chave') !!}
                                {!! Form::text('palavra_chave', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary float-right']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection