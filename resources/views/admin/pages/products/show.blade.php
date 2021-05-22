@extends('admin.layouts.app')

@section('title', 'Gestão de produtos')

@section('content')



<h1>Produto{{$product->name}}</h1>
<a href="{{ route('products.index') }}"><<</a>

<ul>
    <li><strong>Nome: </strong>{{$product->name}}</li>
    <li><strong>Preço: </strong>{{$product->price}}</li>
    <li><strong>Descrição: </strong>{{$product->description}}</li>
</ul>