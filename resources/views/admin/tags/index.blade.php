@extends('adminlte::page')

@section('title', 'Etiuqetas')

@section('content_header')
    <div class="row justify-content-between mx-3">
      <h1>Etiquetas</h1>
      <a href="{{ route('admin.tags.create') }}" class="btn btn-success">Adicionar</a>
    </div>
    
@stop

@section('content')
  <div class="card shadow">
    <div class="responsive">
      <table class="table table-striped table-bordered table-hover table-sm">
        <thead>
          <tr>
            <th>ID</th>
            <th>NOME</th>
            <th width="200" class="text-center">AÇÕES</th>
          </tr>
        </thead>
        <tbody>
          
            @forelse ($tags as $tag)
              <tr class="text-uppercase ">
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->name }}</td>
                
                <td>
                  <div class="row justify-content-center">
                    <a href="{{ route('admin.tags.edit', $tag->slug) }}"
                      class="btn btn-info btn-flat btn-sm">EDITAR</a>
                    
                    <form action="{{ route('admin.tags.destroy', $tag) }}" method="post">
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

      {{ $tags->links() }}
    </div>
  </div>
    
@stop

