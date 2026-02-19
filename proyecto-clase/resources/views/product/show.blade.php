@extends('layout.app')

@section('content')
    <div class="show-container">
    <div class="product-detail">
        <div class="product-image">
            <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9">
        </div>
        <div class="product-info">
            <div class="product-category">Electrónica</div>
            <div class="product-title">iPhone 14 Pro Max 256GB</div>
            <div class="rating">★★★★★ (4.9)</div>
            <div class="price">$4.500.000</div>
            <div class="status available">Disponible</div>
            <div class="description">
                El iPhone 14 Pro Max ofrece un rendimiento excepcional gracias a su potente procesador,
                pantalla Super Retina XDR y sistema avanzado de cámaras profesionales.
            </div>
            <div class="buttons">
                <button class="btn-buy">Comprar Ahora</button>
                <button class="btn-cart">Agregar al Carrito</button>
            </div>
        </div>
    </div>
    </div>
@endsection