@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Cadastrar Usuário</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="data_nascimento" class="col-md-4 col-form-label text-md-right">Data de Nascimento</label>

                            <div class="col-md-6">
                                <input id="data_nascimento" type="date" class="form-control{{ $errors->has('data_nascimento') ? ' is-invalid' : '' }}" name="data_nascimento" value="{{ old('data_nascimento') }}" required autofocus>

                                @if ($errors->has('data_nascimento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('data_nascimento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="formacao" class="col-md-4 col-form-label text-md-right">Formação</label>

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

                                @if ($errors->has('formacao'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('formacao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection