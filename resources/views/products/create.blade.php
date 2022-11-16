@extends('layout.app')

@section('title', 'create')

@section('content')

<h2>registrar productos</h2>
 
@endsection

@section('content2')
<form action="/products/registrar" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">nombre del producto</label>
      <input type="text" class="form-control" id="name_pro" name="name_pro"  placeholder="digite el nombre">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">descripcion</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">precio del producto</label>
        <input type="text" class="form-control" id="precio" name="precio"  placeholder="precio del producto">
      </div><br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection