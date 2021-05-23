@extends('admin.layouts.app')

@section('title', "Editar Produto{$product->name}")

@section('content')
  <h1>Editar Produto {{$product->name}}</h1>

  <form action="{{ route('products.update', $product->id) }}" method="post" class="form">
        @method('PUT')
        @csrf
        <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Nome:" value="{{$product->name ?? old('name')}}">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" name="price" placeholder="Preço:" value="{{$product->price ?? old('price')}}">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" name="description" placeholder="Descrição:" value="{{$product->price ?? old('description')}}">
        </div>
        <button type="submit" class="btn btn-info">Enviar</button>
  </form>

@endsection