@extends('layouts.baseLayout')

@section('content_header')
    <h1>Cadastros</h1>
@stop

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title font-weight-bold">Novo Curso</h3>

        </div>
        <div class="card-body">
            {{Form::open(['method' => 'post','route' => 'cursos.store', 'class' => 'form form-horizontal']) }}
            <div class="row">
                <div class="form-group col-md-4">
                    {{Form::label('nome', 'Nome')}}
                    {{Form::text('nome', null, ['class' => 'form-control', 'placeholder'=>'Nome'])}}
                </div>
                <div class="form-group col-md-4">
                    {{Form::label('descricao', 'Descrição')}}
                    {{Form::text('descricao', null, ['class' => 'form-control'])}}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    {{Form::label('Disciplinas', 'Disciplinas')}}
                    {{Form::text('Disciplinas', null, ['class' => ['form-control']])}}
                </div>
            </div>

            {{ Form::button('<i class="fa fa-save" aria-hidden="true"></i>', ['class' => 'btn btn-block btn-success btn-sm', 'type' => 'submit']) }}

            {{Form::close()}}


        </div>

@stop

@section('js')

@endsection
