@extends('adminlte::page')

@section('title', 'Nova Etiqueta')

@section('content_header')
    <h1>Nova Etiqueta</h1>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-sm-12 col-md-10 col-lg-8">
     <div class="card shadow">
       <div class="card-body">
         {!! Form::open(['route' => 'admin.tags.store']) !!}

         <div class="form-group">
           {!! Form::label('name', 'Nome') !!}
           {!! Form::text('name', null, ['class' => 'form-control text-uppercase']) !!}
         </div>

         {!! Form::submit('CADASTRAR ETIQUETA', ['class' => 'btn btn-primary']) !!}
         {!! Form::close() !!}
       </div>
     </div>
    </div>
    
  </div> 
@stop

