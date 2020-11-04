@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Cadastrar Usuário</div>

                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'route' => ['register']]) !!}
                        @csrf
                        <div class="form-group row">
                            {!! Form::label('name', 'Name', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('data_nascimento', 'Data de Nascimento', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::date('data_nascimento', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('formacao', 'Formação', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::select('formacao', [
                                    'ensino_medio' => 'Ensino Médio',
                                    'ensino_profissionalizante' => 'Ensino Profissionalizante',
                                    'superior_completo' => 'Ensino Superior Completo',
                                    'superior_incompleto' => 'Ensino Superior Incompleto',
                                    'especializacao' => 'Especialização',
                                    'mestrado' => 'Mestrado',
                                    'doutorado' => 'Doutorado'
                                ], null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('curso_formacao', 'Curso de Formação', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('curso_formacao', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('instituicao', 'Instituição', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('instituicao', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('email', 'E-mail', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@email.com']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            {!! Form::label('password', 'Senha', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password',['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password_confirmation', 'Confirme a Senha', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password_confirmation',['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
