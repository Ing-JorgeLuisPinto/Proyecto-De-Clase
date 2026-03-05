@extends('layout.app')

@section('content')
    <div class="index-container">
    <h2 class="section-title">Productos Destacados</h2>
    <div class="products-grid">
        @foreach($misProductos as $producto)

        <div class="product-card">
            <div style="position:relative;">
                <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9" class="product-img">
                <span class="badge">-20%</span>
            </div>
            <div class="product-info">
                <div class="product-title">{{$producto->name}}</div>
                <div class="rating">★★★★★</div>
                <div class="product-price">${{$producto->price}}</div>
                
                <button class="btn">Ver Producto</button>
            </div>
        </div>
        @endforeach
    </div>
@endsection