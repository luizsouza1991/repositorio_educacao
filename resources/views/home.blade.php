@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Título</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Objetivo</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse($objetos as $key => $objeto)
                                    <tr>
                                        <td scope="row">
                                            <div class="dropdown">
                                                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Ações
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="{{ route('recurso.update', ['id' => $objeto->id]) }}">Visualizar</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $objeto->titulo }}</td>
                                        <td>{{ $objeto->tipo }}</td>
                                        <td>{{ $objeto->descricao }}</td>
                                    </tr>
                                @empty
                                    <h2>Não em dados</h2>
                                @endforelse
                            </tbody>
                          </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
