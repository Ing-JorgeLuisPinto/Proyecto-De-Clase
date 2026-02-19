
@extends('layout.app')

@section('content')
    <div class="create-container">
    <div class="form-card">
        <h2>Agregar Producto</h2>
        <form>
            <div class="form-group">
                <label for="id_producto">ID Producto</label>
                <input type="text" id="id_producto" name="id_producto">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="imagen">URL Imagen</label>
                <input type="text" id="imagen" name="imagen">
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <select id="estado" name="estado">
                    <option value="disponible">Disponible</option>
                    <option value="agotado">Agotado</option>
                </select>
            </div>
            <button type="submit" class="submit-btn">Guardar Producto</button>
        </form>
    </div>
    </div>
@endsection
