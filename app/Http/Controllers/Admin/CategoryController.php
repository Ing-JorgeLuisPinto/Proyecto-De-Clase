<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id','desc')->get();

        return view('admin.categories.index',[
            'categories' => $categories
        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100'
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect()->route('admin.categories.index')
        ->with('success','Categoría creada correctamente');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit',[
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|min:3|max:100'
        ]);

        $category->name = $request->name;
        $category->save();

        return redirect()->route('admin.categories.index')
        ->with('success','Categoría actualizada');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')
        ->with('success','Categoría eliminada');
    }
}