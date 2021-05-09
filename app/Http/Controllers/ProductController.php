<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ['Product 01', 'Product 02', 'Product 03'];

        return $products;
    }

    public function show($id)
    {
        return "Exibindo o produto por {$id}";
    }

    public function create()
    {
        return "Criando um novo produto";
    }

    public function edit($id)
    {
        return "Form para editar produto{$id}";
    }

    public function store($id)
    {
        return "Cadastrando novo produto";
    }

    public function update($id)
    {
        return "Editando produto {$id}";
    }

    public function destroy($id)
    {
        return "Deletando produto {$id}";
    }
}
