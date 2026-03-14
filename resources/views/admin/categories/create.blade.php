@extends('admin.layout.app')

@section('content')

<h1>Crear Categoría</h1>

@if($errors->any())

<div class="alert-error">

@foreach($errors->all() as $error)

<p>{{ $error }}</p>

@endforeach

</div>

@endif

<form action="{{ route('admin.categories.store') }}" method="POST">

@csrf

<div class="form-group">

<label>Nombre</label>

<input type="text" name="name" value="{{ old('name') }}" required>

</div>

<div class="actions">

<button type="submit" class="btn save">
Guardar
</button>

<a href="{{ route('admin.categories.index') }}" class="btn cancel">
Volver
</a>

</div>

</form>

@endsection