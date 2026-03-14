@extends('admin.layout.app')

@section('content')

<div class="cards">

<div class="card">
<h3>Total Productos</h3>
<p>{{ \App\Models\Product::count() }}</p>
</div>

<div class="card">
<h3>Categorías</h3>
<p>{{ \App\Models\Category::count() }}</p>
</div>

<div class="card">
<h3>Productos con Imagen</h3>
<p>{{ \App\Models\Product::whereNotNull('image')->count() }}</p>
</div>

<div class="card">
<h3>Último Producto</h3>
<p>{{ optional(\App\Models\Product::latest()->first())->name ?? 'N/A' }}</p>
</div>

</div>


<div class="table">

<h2 style="margin-bottom:15px;">Últimos productos agregados</h2>

<table>

<thead>
<tr>
<th>ID</th>
<th>Producto</th>
<th>Precio</th>
<th>Categoría</th>
</tr>
</thead>

<tbody>

@foreach(\App\Models\Product::latest()->limit(5)->get() as $producto)

<tr>
<td>{{ $producto->id }}</td>

<td>{{ $producto->name }}</td>

<td>${{ number_format($producto->price,0,',','.') }}</td>

<td>{{ $producto->category->name ?? 'Sin categoría' }}</td>

</tr>

@endforeach

</tbody>

</table>

</div>

@endsection