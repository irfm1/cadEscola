@extends('layouts.baseLayout')

@section('content_header')
    <h1>Cadastros</h1>
@stop

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title font-weight-bold">Novo aluno</h3>

        </div>
        <div class="card-body">
            {{Form::open(['method' => 'post','route' => 'alunos.store', 'class' => 'form form-horizontal']) }}
            <div class="row">
                <div class="form-group col-md-4">
                    {{Form::label('nome', 'Nome')}}
                    {{Form::text('nome', null, ['class' => 'form-control', 'placeholder'=>'Nome'])}}
                </div>
                <div class="form-group col-md-4">
                    {{Form::label('cpf', 'CPF')}}
                    {{Form::text('cpf', null, ['class' => 'form-control', 'placeholder'=>'CPF', 'data-mask' => '000.000.000-00'])}}
                </div>
                <div class="form-group col-md-4">
                    {{Form::label('telefone', 'Telefone')}}
                    {{Form::text('telefone', null, ['class' => 'form-control', 'placeholder'=>'Telefone', 'data-mask' => '(00) 00000-0000'])}}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    {{Form::label('logradouro', 'Rua')}}
                    {{Form::text('endereco', null, ['class' => ['form-control','viacep-endereco'], 'placeholder'=>'Logradouro'])}}
                </div>
                <div class="form-group col-md-2">
                    {{Form::label('bairro', 'Bairro')}}
                    {{Form::text('bairro', null, ['class' => ['form-control','viacep-bairro'], 'placeholder'=>'Bairro'])}}
                </div>
                <div class="form-group col-md-2">
                    {{Form::label('cidade', 'Cidade')}}
                    {{Form::text('cidade', null, ['class' => ['form-control','viacep-cidade'], 'placeholder'=>'Cidade'])}}
                </div>
                <div class="form-group col-md-2">
                    {{Form::label('estado', 'Estado')}}
                    {{Form::text('estado', null, ['class' => ['form-control','viacep-estado'], 'placeholder'=>'Estado'])}}
                </div>
                <div class="form-group col-md-2">
                    {{Form::label('cep', 'CEP')}}
                    {{Form::text('cep', null, ['class' => ['form-control','viacep-cep'], 'placeholder'=>'CEP', 'data-mask' => '00000-000'])}}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    {{Form::label('nomeMae', 'Nome da Mãe')}}
                    {{Form::text('nomeMae', null, ['class' => ['form-control'], 'placeholder'=>'Nome da Mãe'])}}
                </div>
                <div class="form-group col-md-2">
                    {{Form::label('nomePai', 'Nome do pai')}}
                    {{Form::text('nomePai', null, ['class' => ['form-control'], 'placeholder'=>'Nome do Pai'])}}
                </div>
                <div class="form-group col-md-2">
                    {{Form::label('email', 'E-mail')}}
                    {{Form::text('email', null, ['class' => ['form-control'], 'placeholder'=>'E-mail'])}}
                </div>
                <div class="form-group col-md-2">
                    {{Form::label('pagamento', 'Pagamento')}}
                    {{Form::text('pagamento', null, ['class' => ['form-control'], 'placeholder'=>'Pagamento'])}}
                </div>
                <div class="form-group col-md-2">
                    {{Form::label('tipo', 'Tipo')}}
                    {{Form::text('tipo', null, ['class' => ['form-control'], 'placeholder'=>'Tipo'])}}
                </div>
            </div>

            {{ Form::button('<i class="fa fa-save" aria-hidden="true"></i>', ['class' => 'btn btn-block btn-success btn-sm', 'type' => 'submit']) }}

            {{Form::close()}}


        </div>

@stop

@section('js')
            <script src="https://cdn.jsdelivr.net/npm/@vsilva472/jquery-viacep/dist/jquery-viacep.min.js"></script>

            <script>
                $('.form').viacep();
            </script>
@endsection
