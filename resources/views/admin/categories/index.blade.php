@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <div class="row justify-content-between mx-3">
      <h1>Categorias</h1>
      <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Adicionar</a>
    </div>
    
@stop

@section('content')
    <div class="responsive">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th width="200"></th>
          </tr>
        </thead>
        <tbody>
          
            @forelse ($categories as $category)
              <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                
                <td>
                  <div class="row justify-content-center">
                    <a href="{{ route('admin.categories.edit', $category) }}"
                      class="btn btn-info btn-flat btn-sm">EDITAR</a>
                    
                    <form action="{{ route('admin.categories.destroy', $category) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-flat btn-sm ml-2">EXCLUIR</button>
                    </form>  
                  </div>
                 
                </td>
              </tr>
            @empty
                <div class="alert alert-secoundary">
                  Nenhum registro encontrado.
                </div>
            @endforelse
          
        </tbody>
      </table>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop