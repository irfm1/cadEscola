@extends('layouts.baseLayout')

@section('content_header')
    <h1>Cadastros</h1>
@stop

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title font-weight-bold">Cursos</h3>
            <div class="card-tools pull-right">
                <a class="btn btn-primary text-decoration-none" href="{{route('cursos.create')}}">Novo Curso</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <th>
                    Nome
                </th>
                <th>
                    Descrição
                </th>
                <th>Editar</th>
                </thead>
                <tbody>
                <tr>
                    <Td>Nome do Curso</Td>
                    <Td>Curso sobre algo</Td>
                    <Td><div class="btn-group">
                            <button type="button" class="btn btn-default"><i class="fas fa-cog"></i></button>
                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                                <div class="dropdown-menu" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-1px, 37px, 0px);">
                                    <a class="dropdown-item" href="#">Editar</a>
                                    <a class="dropdown-item" href="#">Apagar</a>
                                    <a class="dropdown-item" href="#">Visualizar</a>
                            </button>
                        </div>

                    </Td>
                </tr>
                </tbody>
            </table>


        </div>

@stop
