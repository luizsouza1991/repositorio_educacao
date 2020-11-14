<div class="modal fade" id="modal-cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastro de usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
                        {!! Form::label('password', '', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                        <div class="col-md-6">
                            {!! Form::password('password',['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('password_confirmation', 'Confirme a ', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                        <div class="col-md-6">
                            {!! Form::password('password_confirmation',['class' => 'form-control']) !!}
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>



