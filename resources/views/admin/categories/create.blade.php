@extends('adminlte::page')

@section('title', 'Nova Categoria')

@section('content_header')
    <h1>Nova Categoria</h1>
@stop

@section('content')
   <div class="row justify-content-center">
     <div class="col-sm-12 col-md-10 col-lg-8">
      <div class="card shadow">
        <div class="card-body">
          {!! Form::open(['route' => 'admin.categories.store']) !!}

          <div class="form-group">
            {!! Form::label('name', 'Nome') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
          </div>

          {!! Form::submit('CADASTRAR CATEGORIA', ['class' => 'btn btn-primary']) !!}
          {!! Form::close() !!}
        </div>
      </div>
     </div>
     
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop