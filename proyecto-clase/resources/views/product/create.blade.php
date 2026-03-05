
@extends('layout.app')

@section('content')
    <div class="create-container">
    <div class="form-card">
        <h2>Agregar Producto</h2>
        <form action ="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen del producto</label>
                <input type="file" id="imagen" name="imagen" accept="image/*">
            </div>
            <div class="form-group">
                <label for="estado">Categoria</label>
                <select id="estado" name="estado">
                    @foreach($categoryList as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                   
                </select>
            </div>
            <button type="submit" class="submit-btn">Guardar Producto</button>
        </form>
    </div>
    </div>
@endsection
