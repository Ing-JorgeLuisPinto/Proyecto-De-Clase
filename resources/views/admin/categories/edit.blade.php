@extends('admin.layout.app')

@section('content')

<h1>Editar Categoría</h1>

@if($errors->any())

<div class="alert-error">

@foreach($errors->all() as $error)

<p>{{ $error }}</p>

@endforeach

</div>

@endif

<form action="{{ route('admin.categories.update',$category) }}" method="POST">

@csrf
@method('PUT')

<div class="form-group">

<label>Nombre</label>

<input type="text" name="name" value="{{ $category->name }}" required>

</div>

<div class="actions">

<button type="submit" class="btn save">
Actualizar
</button>

<a href="{{ route('admin.categories.index') }}" class="btn cancel">
Volver
</a>

</div>

</form>

@endsection