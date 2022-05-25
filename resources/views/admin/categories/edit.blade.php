@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Categoria: <b>{{ $category->name }}</b></h1>
@stop

@section('content')
<div class="row justify-content-center">
  <div class="col-8">
    <div class="card shadow-lg">
      <div class="card-body">
        {!! Form::model($category, ['route' => ['admin.categories.update', $category->slug], 'method' => 'put']) !!}

          <div class="form-group">
            {!! Form::label('name', 'Nome') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Insira o nome da categoria']) !!}
          </div>

          {!! Form::submit('Atualizar Categoria', ['class' => 'btn btn-flar btn-primary']) !!}
          
        {!! Form::close() !!}
      </div>

    </div>
  </div>
</div>
@stop

@section('css')
    
@stop

@section('js')
    