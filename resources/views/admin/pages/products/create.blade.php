@extends('admin.layouts.app')

@section('title', 'cadastrar novo produto')

@section('content')
     <h1>Cadastrar Novo Produto</h1>

     @if ($errors->any())
         <ul>
           @foreach ($errors->all() as $error)
                <li>{{  $error  }}</li>
           @endforeach
         </ul>
     @endif

     <form action="{{ route('products.store') }}"method="post" enctype="multipart/form-data">
        <!-- @method('put') para enviar via put -->
        @csrf
         <input type="text" name="name"  placeholder="Nome:" value="{{ old('name') }}">
         <input type="text" name="description" placeholder="Descrição:" value="{{ old('description') }}">
         <input type="file" name="photo">
         <button type="submit">Enviar</button>
     </form>
@endsection