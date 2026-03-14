@extends('layout.app')

@section('content')

<div class="container">

    <!-- HERO -->
    <section class="hero">

        <div class="hero-text">

            <h1>La mejor tecnología al mejor precio</h1>

            <p>
                Descubre los productos más innovadores del mercado.
                Smartphones, gadgets, computadoras y mucho más.
            </p>

            <div class="actions">
                <a href="{{ route('product.index') }}" class="save btn">
                    Ver Productos
                </a>

                <a href="{{ route('product.create') }}" class="cancel btn">
                    Publicar Producto
                </a>
            </div>

        </div>

        <div class="hero-image">
            <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9">
        </div>

    </section>


    <!-- BENEFICIOS -->
    <section class="features">

        <div class="feature-card">
            <h3>🚚 Envíos Rápidos</h3>
            <p>Entrega segura y rápida en todo el país.</p>
        </div>

        <div class="feature-card">
            <h3>🔒 Pago Seguro</h3>
            <p>Protección total en todas tus compras.</p>
        </div>

        <div class="feature-card">
            <h3>💻 Tecnología Premium</h3>
            <p>Productos de última generación.</p>
        </div>

    </section>


    <!-- CTA -->
    <section class="cta">

        <h2>Explora nuestro catálogo</h2>

        <p>
            Encuentra el producto perfecto para ti.
        </p>

        <a href="{{ route('product.index') }}" class="save btn">
            Ir a Productos
        </a>

    </section>

</div>

@endsection