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
        $request->validate([
            'name' => 'required|min:5|max:250',
            'price' => 'required|numeric',
            'description' => 'required',
            'image' => 'nullable|image',
            'category' => 'required|exists:categories,id'
        ]);

        $newProduct = new Product();

        $newProduct->name = $request->name;
        $newProduct->description = $request->description;
        $newProduct->price = $request->price;
        $newProduct->category_id = $request->category;

        if($request->hasFile('image')){
            $ruta = $request->file('image')->store('images','public');
            $newProduct->image = $ruta;
        }

        $newProduct->save();

        return redirect()->route('product.index')
        ->with('success','Producto guardado con éxito');
    }

    public function show(Product $producto)
    {
        return view('product.show',[
            'producto' => $producto
        ]);
    }

    public function destroy(Product $producto)
    {
        $producto->delete();

        return redirect()->route('product.index')
        ->with('success','Producto eliminado con éxito');
    }
}