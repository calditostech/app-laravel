@extends('admin.layouts.app')

@section('title', 'Gestão de produtos')

@section('content')

<h1>Exibindo os produtos</h1>
<a href="{{ route('products.create') }}">Cadastrar</a>



@endsection