@extends('layout.master')
@section('content')

{!! Form::open(['route'=>'devolucao.store','method'=>'POST']) !!}
<div class="form-group">

    {!! Form::label('utente','Codigo do Utente: ')!!}
    {!! Form::text('utente',null,['class'=>'form-control'])!!}

    {!! Form::label('livro','Codigo do Livro: ')!!}
    {!! Form::text('livro',null,['class'=>'form-control'])!!}

    {!! Form::label('estado_conservacao','Estado de Conservacao: ')!!}
    {!!Form::select('estado_conservacao', array('Bom' => 'Bom', 'Razoavel' => 'Razoavel', 'Mau' => 'Mau'), null, ['placeholder' => 'Seleccione o Estado de Conservacao...'])!!}
    <br>
    
    
</div>

<div class="form-group">
    {!! Form::submit('Efectuar DEvolucao',['class'=>'btn btn-primary form-control'])!!}
</div>
{!! Form::close() !!}
   

@stop