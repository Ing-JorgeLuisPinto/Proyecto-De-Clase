@extends('admin.layout.app')

@section('content')

<div class="page-header">

<h1>Categorías ({{ $categories->count() }})</h1>

<div class="header-actions">

<input 
type="search" 
id="category-search" 
placeholder="Buscar categoría..."
class="search"
/>

<a href="{{ route('admin.categories.create') }}" class="btn save">
Crear categoría
</a>

</div>

</div>

@if(session('success'))
<div class="alert-success">
{{ session('success') }}
</div>
@endif

<table class="admin-table">

<thead>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Acciones</th>
</tr>
</thead>

<tbody>

@forelse($categories as $category)

<tr data-name="{{ strtolower($category->name) }}">

<td>{{ $category->id }}</td>

<td>{{ $category->name }}</td>

<td>

<a href="{{ route('admin.categories.edit',$category) }}" class="btn edit">
Editar
</a>

<form 
action="{{ route('admin.categories.destroy',$category) }}" 
method="POST"
style="display:inline"
onsubmit="return confirm('¿Seguro que deseas eliminar esta categoría?')"
>

@csrf
@method('DELETE')

<button type="submit" class="btn delete">
Eliminar
</button>

</form>

</td>

</tr>

@empty

<tr>
<td colspan="3">No hay categorías creadas.</td>
</tr>

@endforelse

</tbody>

</table>

<script>

const searchInput = document.getElementById('category-search');
const rows = document.querySelectorAll('.admin-table tbody tr');

searchInput.addEventListener('input', () => {

const term = searchInput.value.toLowerCase();

rows.forEach(row => {

const name = row.dataset.name || '';

row.style.display = name.includes(term) ? '' : 'none';

});

});

</script>

@endsection