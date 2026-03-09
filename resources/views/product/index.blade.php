@extends('layout.app')

@section('content')
<div class="container">

  @if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
  @endif

  <div class="page-header">
    <div>
      <h1>Productos Destacados</h1>
      <p class="subtitle">Filtra productos en tiempo real y encuentra lo que necesitas.</p>
    </div>

    <div class="header-actions">
      <input id="product-search" class="search" type="search" placeholder="Buscar producto...">
      <a href="{{ route('product.create') }}" class="btn save">Agregar producto</a>
    </div>
  </div>

  @if($misProductos->isEmpty())
    <div class="empty-state">
      <p>No hay productos disponibles aún. Agrega uno para empezar.</p>
    </div>
  @else
    <div class="grid" id="product-grid">
      @foreach($misProductos as $producto)
        <div class="card" data-name="{{ strtolower($producto->name) }}">
          
          <span class="badge">{{ $producto->category->name ?? 'Sin categoría' }}</span>
          @if ($producto->image)

              <img src="{{ asset('storage/' .$producto->image) }}" alt="">

          @else
              <img src="https://gaceta.cch.unam.mx/sites/default/files/styles/imagen_articulos_1920x1080/public/2023-09/pag_62.jpg?h=208bb47f&itok=Nj1QrlLd" alt="">


          @endif

          <h3>{{ $producto->name }}</h3>

          <p class="price">
            ${{ number_format($producto->price, 0, ',', '.') }}
          </p>
 
          <p>
            {{ \Illuminate\Support\Str::limit($producto->description ?? 'Sin descripción disponible', 80) }}
          </p>

          <div class="actions">
            <a href="{{ route('product.show', $producto) }}" class="btn save">
              Ver producto
            </a>

            <button class="btn cancel" type="button">
              Agregar al carrito
            </button>
          </div>

        </div>
      @endforeach
    </div>
  @endif

</div>

<script>
const searchInput = document.getElementById('product-search');
const productCards = document.querySelectorAll('#product-grid .card');

searchInput.addEventListener('input', () => {
  const term = searchInput.value.trim().toLowerCase();

  productCards.forEach(card => {
    const name = card.dataset.name || '';
    card.style.display = name.includes(term) ? '' : 'none';
  });
});
</script>

@endsection