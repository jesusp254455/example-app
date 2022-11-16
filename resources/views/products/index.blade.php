@extends('layout.app')

@section('title', 'home')

@section('content')
    
<div class="table-responsive acv">
    <table class="table">
      <thead>
        <tr class="bg-info">
          <th class="text-center">#</th>
          <th>nombre</th>
          <th>descripcion</th>
          <th>precio</th>
          <th>create</th>
          <th>update</th>
          <th class="text-right">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $item)
        <tr>
          <td class="text-center">1</td>
          <td>{{$item->PRO_NOMBRE}}</td>
          <td>{{$item->PRO_DESCRIPCION}}</td>
          <td>{{$item->PRO_PRECIO}}</td>
          <td>{{$item->created_at}}</td>
          <td>{{$item->updated_at}}</td>
          <td class="td-actions text-right">
            <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-round btn-icon bcn">
              editar
            </button>
            <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon bcn">
              eliminar
            </button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection