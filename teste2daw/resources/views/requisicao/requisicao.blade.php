@extends('layout.master')
@section('content')

{!! Form::open(['route'=>'requisicao.store','method'=>'POST']) !!}
<div class="form-group">

    {!! Form::label('utente','Codigo do Utente: ')!!}
    {!! Form::text('utente',null,['class'=>'form-control'])!!}

    {!! Form::label('livro','Codigo do Livro: ')!!}
    {!! Form::text('livro',null,['class'=>'form-control'])!!}

    {!! Form::label('estado_conservacao','Estado de Conservacao: ')!!}
    {!!Form::select('estado_conservacao', array('Bom' => 'Bom', 'Razoavel' => 'Razoavel', 'Mau' => 'Mau'), null, ['placeholder' => 'Seleccione o Estado de Conservacao...'])!!}
    <br>
    {!! Form::label('data_devolucao','Data da Devolucao: ')!!}
    {!! Form::text('data_devolucao',null,['class'=>'form-control'])!!}

    {!! Form::label('observacao','Observacao: ')!!}
    {!! Form::text('observacao',null,['class'=>'form-control'])!!}


    
</div>

<div class="form-group">
    {!! Form::submit('Efectuar Requisicao',['class'=>'btn btn-primary form-control'])!!}
</div>
{!! Form::close() !!}
   

@stop