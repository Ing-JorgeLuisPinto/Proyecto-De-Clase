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
        $newProduct = new Product();

        $newProduct->name = $request->name;
        $newProduct->description = $request->description;
        $newProduct->price = $request->price;
        $newProduct->category_id = $request->category_id;

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