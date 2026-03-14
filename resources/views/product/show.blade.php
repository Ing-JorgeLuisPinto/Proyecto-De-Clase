@extends('layout.app')

@section('content')

<div class="container">

<div class="product-detail">

    <div class="product-image">

    @if ($producto->image)
        <img src="{{ asset('storage/'.$producto->image) }}" alt="">
    @else
       <img src="https://gaceta.cch.unam.mx/sites/default/files/styles/imagen_articulos_1920x1080/public/2023-09/pag_62.jpg?h=208bb47f&itok=Nj1QrlLd" alt="">
    @endif

    </div>

    <div class="product-meta">

        <div class="product-category">
            {{ $producto->category->name ?? 'Sin categoría' }}
        </div>

        <h1 class="product-title">
            {{ $producto->name }}
        </h1>

        <div class="price">
            ${{ number_format($producto->price,0,',','.') }}
        </div>

        <p class="product-description">
            {{ $producto->description }}
        </p>

        <div class="actions">
            <button class="btn save">
                Comprar Ahora
            </button>

            <button class="btn cancel">
                Agregar al carrito
            </button>
        </div>

    </div>

</div>

</div>

@endsection