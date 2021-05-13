@extends('admin.layouts.app')

@section('title', 'cadastrar novo produto')

@section('content')
     <h1>Cadastrar Novo Produto</h1>

     <form action="{{ route('products.store') }}"method="post">
        <!-- @method('put') para enviar via put -->
        @csrf
         <input type="text" name="name"  placeholder="Nome:">
         <input type="text" name="description" placeholder="Descrição:">
         <button type="submit">Enviar</button>
     </form>
@endsection