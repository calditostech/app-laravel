<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        dd($request);
       $this->request = $request;

       $this->middleware('auth')->only(['create', 'store'
       ]);
    }

    public function index()
    {
       $teste = 123;

       return view('teste', compact('teste'));
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

    public function store(Request $request)
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
