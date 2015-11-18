@extends('layout.master')
@section('content')

{!! Form::open(['route'=>'utente.store','method'=>'POST']) !!}
<div class="form-group">

    {!! Form::label('Nome','Nomes Proprios: ')!!}
    {!! Form::text('nome',null,['class'=>'form-control'])!!}
    {!! Form::label('Apelido','Apelido (s): ')!!}
    {!! Form::text('apelido',null,['class'=>'form-control'])!!}
    {!! Form::label('bi','Numero do Documento: ')!!}
    {!! Form::text('bi',null,['class'=>'form-control'])!!}
    {!! Form::label('nuit','Numero Unico de Identificacao Tributaria (NUIT): ')!!}
    {!! Form::text('nuit',null,['class'=>'form-control'])!!}
    {!! Form::label('morada','Endereco: ')!!}
    {!! Form::text('morada',null,['class'=>'form-control'])!!}
    {!! Form::label('telefone1','Telefone 1: ')!!}
    {!! Form::text('telefone1',null,['class'=>'form-control'])!!}
    {!! Form::label('telefone2','Telefone 2: ')!!}
    {!! Form::text('telefone2',null,['class'=>'form-control'])!!}
    {!! Form::label('email',' Endereco Electronico: ')!!}
    {!! Form::text('email',null,['class'=>'form-control'])!!}



</div>

<div class="form-group">
    {!! Form::submit('Adicionar Utente',['class'=>'btn btn-primary form-control'])!!}
</div>
{!! Form::close() !!}
   

@stop