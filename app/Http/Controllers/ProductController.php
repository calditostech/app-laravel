<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateProductRequest;
use Illuminate\Foundation\Http\FormRequest;

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
       $products = Product::paginate(15);

       return view('admin.pages.products.index', ['products' => $products,]);
    }

    public function show($id)
    {
        //$product = Product::where('id', $id)->first();
        if(!$product = Product::find($id))
           return redirect()->back();
        return view('admin.pages.products.show',
        ['product' => $product
        ]);
    }

    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * 
     * 
     * @param \App\Http\Request\StoreUpdateProductRequest $request
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        return "Form para editar produto{$id}";
    }

    public function store(StoreUpdateProductRequest $request)
    {
       /*
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'nullable|min:3|max:10000',
            'photo' => 'required|image',
        ]);
        */
        //dd($request->all());
        //dd($request->only(['name', 'description]));
        //dd($request->input('teste', 'default'));
        //dd($request->except('_token', 'name'));
        //dd($request->file('photo'));
        if($request->file('photo')->isValid()){
           //dd($request->file('photo')->storeAs('products'));
          $nameFile = $request->name . '.' . $request->photo->extension();
          dd($request->file('photo')->storeAs('products', $nameFile));
        }
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
