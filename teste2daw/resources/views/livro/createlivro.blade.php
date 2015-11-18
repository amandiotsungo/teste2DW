@extends('layout.master')
@section('content')

{!! Form::open(['route'=>'livro.store','method'=>'POST']) !!}
<div class="form-group">

    {!! Form::label('titulo','Titulo do Livro: ')!!}
    {!! Form::text('titulo',null,['class'=>'form-control'])!!}

    {!! Form::label('resumo','Resumo do Livro: ')!!}
    {!! Form::text('resumo',null,['class'=>'form-control'])!!}

    {!! Form::label('autor','Autor: ')!!}
    {!! Form::text('autor',null,['class'=>'form-control'])!!}

    {!! Form::label('editora','Editora: ')!!}
    {!! Form::text('editora',null,['class'=>'form-control'])!!}

    {!! Form::label('edicao', 'Edicao: ')!!}
    {!! Form::text('edicao',null,['class'=>'form-control'])!!}

    {!! Form::label('volume','Volume: ')!!}
    {!! Form::text('volume',null,['class'=>'form-control'])!!}

    {!! Form::label('categoria','Categoria: ')!!}
    {!!Form::select('categoria', array('Romance' => 'Romance', 'Ciencia' => 'Ciencia', 'Tecnologia' => 'Tecnologia'), null, ['placeholder' => 'Seleccione a Categoria...'])!!}

    {!! Form::label('estado_conservacao','Estado de Conservacao: ')!!}
    {!!Form::select('estado_conservacao', array('Bom' => 'Bom', 'Razoavel' => 'Razoavel', 'Mau' => 'Mau'), null, ['placeholder' => 'Seleccione o Estado de Conservacao...'])!!}

    
</div>

<div class="form-group">
    {!! Form::submit('Adicionar Livro',['class'=>'btn btn-primary form-control'])!!}
</div>
{!! Form::close() !!}
   

@stop