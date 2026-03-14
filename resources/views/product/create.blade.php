@extends('layout.app')

@section('content')
<div class="container">
  <div class="form-box">
    <h1>Agregar Producto</h1>

    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="form-grid">
        <div>
          <label for="name">Nombre</label>
          <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Ej. Camiseta deportiva">
          @error('name')
              <span style="color: red; font-size: 14px;">
                  {{ $message }}
              </span>
          @enderror


        </div>

        <div>
          <label for="price">Precio</label>
          <input type="number" id="price" name="price" value="{{ old('price') }}" placeholder="Ej. 14990" step="0.01">
          @error('price')
              <span style="color: red; font-size: 14px;">
                  {{ $message }}
              </span>
          @enderror
        </div>

        <div class="full">
          <label for="description">Descripción</label>
          <textarea id="description" name="description" rows="4" placeholder="Describe el producto...">{{ old('description') }}</textarea>
          @error('description')
              <span style="color: red; font-size: 14px;">
                  {{ $message }}
              </span>
          @enderror
        </div>

        <div>
          <label for="category">Categoría</label>
          <select id="category" name="category">
            @foreach($categoryList as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
           @error('category')
              <span style="color: red; font-size: 14px;">
                  {{ $message }}
              </span>
          @enderror
        </div>

        <div>
          <label for="image">Imagen del producto</label>
          <input type="file" id="image" name="image" accept="image/*">
          @error('image')
              <span style="color: red; font-size: 14px;">
                  {{ $message }}
              </span>
          @enderror
        </div>
      </div>

      <div class="actions">
        <button type="submit" class="save">Guardar</button>
        <a href="{{ route('product.index') }}" class="btn cancel">Cancelar</a>
      </div>
    </form>
  </div>
</div>
@endsection