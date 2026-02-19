<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Agregar Producto</title>
<link rel=stylesheet href="{{ asset('css/style.css') }}">


</head>
<body>
<div class="container">
<h1>Agregar Nuevo Producto</h1>
<form id="form">
<div class="form-grid">
<div>
<label>ID Producto</label>
<input type="number" id="id" required>
</div>
<div>
<label>Nombre</label>
<input type="text" id="nombre" required>
</div>
<div>
<label>Precio</label>
<input type="number" id="precio" required>
</div>
<div>
<label>Estado</label>
<select id="estado">
<option value="true">Activo</option>
<option value="false">Inactivo</option>
</select>
</div>
<div class="full">
<label>Descripción</label>
<textarea id="descripcion" required></textarea>
</div>
<div class="full">
<label>Imagen URL</label>
<input type="text" id="imagen" placeholder="https://...">
</div>
<div class="full preview" id="preview">Vista previa de imagen</div>
</div>
<div class="actions">
<button type="reset" class="cancel">Cancelar</button>
<button type="submit" class="save">Guardar Producto</button>
</div>
</form>
</div>
<script>
const imgInput=document.getElementById('imagen');
const preview=document.getElementById('preview');
imgInput.addEventListener('input',()=>{
 if(imgInput.value){preview.innerHTML=`<img src="${imgInput.value}">`}else preview.textContent='Vista previa de imagen';
});

document.getElementById('form').addEventListener('submit',e=>{
 e.preventDefault();
 const producto={
  id:document.getElementById('id').value,
  nombre:document.getElementById('nombre').value,
  precio:document.getElementById('precio').value,
  descripcion:document.getElementById('descripcion').value,
  imagen:document.getElementById('imagen').value,
  estado:document.getElementById('estado').value
 };
 console.log('Producto guardado:',producto);
 alert('Producto agregado (simulado)');
});
</script>
</body>
</html>