<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $productList = Product::orderBy('id','desc')->limit(10)->get();

        return view('product.index',[
            'misProductos' => $productList
        ]);
    }

    public function create()
    {
        $categoryList = Category::all();

        return view('product.create',[
            'categoryList' => $categoryList
        ]);
    }

    public function store(Request $request)
    {
        //VALIDACION
        $request->validate([
            'name' => 'required|min:5|max:250',
            'price' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|image',
            'category' => 'required|exists:categories,id'
            
        ]);


        $newProduct = new Product();

        $newProduct->name = $request->get('nombre');
        $newProduct->description = $request->get('description');
        $newProduct->price = $request->get('price');
        $newProduct->category_id = $request->get('category');

        if($request->hasFile('image')){
            $ruta = $request->file('image')->store('images','public');
            $newProduct->image = $ruta;
           
        }

        $newProduct->save();

        return redirect()->route('product.index')
    ->with('success', 'Producto guardado con éxito');
    }

    public function show(Product $product)
    {
        return view('product.show');
    }
}