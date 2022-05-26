@extends('adminlte::page')

@section('title', 'Editar Etiquetas')

@section('content_header')
    <h1>Editar Etiqueta: <b>{{ $tag->name }}</b></h1>
@stop

@section('content')
<div class="row justify-content-center">
  <div class="col-8">
    <div class="card shadow-lg">
      <div class="card-body">
        {!! Form::model($tag, ['route' => ['admin.tags.update', $tag->slug], 'method' => 'put']) !!}

          <div class="form-group">
            {!! Form::label('name', 'Nome') !!}
            {!! Form::text('name', null, ['class' => 'form-control text-uppercase', 'placeholder' => 'Insira o nome da etiqueta']) !!}
          </div>

          {!! Form::submit('Atualizar etiqueta', ['class' => 'btn btn-flar btn-primary']) !!}
          
        {!! Form::close() !!}
      </div>

    </div>
  </div>
</div>
@stop

@section('css')
    
@stop

@section('js')
    