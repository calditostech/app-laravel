<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        /* injeção de dependencias */
       $this->request = $request;
        /* para autenticar alguns metodos dos controller */
     /*  $this->middleware('auth')->only(['create', 'store'
       ]); */
    }

    public function index()
    {
       $teste = 123;

       return view('admin.pages.products.index', compact('teste'));
    }

    public function show($id)
    {
        return "Exibindo o produto por {$id}";
    }

    public function create()
    {
        return view('admin.pages.products.create');
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
