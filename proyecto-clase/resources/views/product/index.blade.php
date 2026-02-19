@extends('layout.app')

@section('content')
    <div class="index-container">
    <h2 class="section-title">Productos Destacados</h2>
    <div class="products-grid">
        <div class="product-card">
            <div style="position:relative;">
                <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9" class="product-img">
                <span class="badge">-20%</span>
            </div>
            <div class="product-info">
                <div class="product-title">iPhone 14 Pro</div>
                <div class="rating">★★★★★</div>
                <div class="price-old">$1.200.000</div>
                <div class="price-new">$960.000</div>
                <button class="btn">Ver Producto</button>
            </div>
        </div>
        <div class="product-card">
            <div style="position:relative;">
                <img src="https://images.unsplash.com/photo-1512499617640-c2f999a88a7f" class="product-img">
            </div>
            <div class="product-info">
                <div class="product-title">Laptop Gamer</div>
                <div class="rating">★★★★☆</div>
                <div class="price-new">$3.200.000</div>
                <button class="btn">Ver Producto</button>
            </div>
        </div>
    </div>
    </div>
@endsection