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
            'nombre' => 'required|min:5|max:250',
            'precio' => 'required|numeric',
            'descripcion' => 'required',
            'imagen' => 'required|image',
            'estado' => 'required|exists:categories,id'
        ]);

        $newProduct = new Product();

        $newProduct->name = $request->get('nombre');
        $newProduct->description = $request->get('descripcion');
        $newProduct->price = $request->get('precio');
        $newProduct->category_id = $request->get('estado');

        if($request->hasFile('imagen')){
            $ruta = $request->file('imagen')->store('images','public');
            $newProduct->image = $ruta;
        }

        $newProduct->save();

        return redirect()->route('product.index')
        ->with('success', 'Producto guardado con éxito');
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
        ->with('success', 'Producto eliminado con éxito');
    }

}