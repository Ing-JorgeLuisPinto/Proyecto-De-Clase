<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Crear</title>
<link rel=stylesheet href="{{ asset('css/style.css') }}">

</head>
<body>

<nav class="navbar">
<a class="navbar-brand">JetProduct</a>
<ul class="navbar-links">
<li><a href="index.html">Dashboard</a></li>
<li><a href="show.html">Inventario</a></li>
<li><a href="create.html">Crear</a></li>
</ul>
</nav>

<div class="container">
<h1>Nuevo Producto</h1>

<form id="form">
<input placeholder="Nombre" id="nombre">
<input placeholder="Precio" type="number" id="precio">
<input placeholder="Descripción" id="descripcion">
<input placeholder="URL Imagen" id="imagen">
<select id="estado">
<option value="true">Activo</option>
<option value="false">Inactivo</option>
</select>
<button>Guardar</button>
</form>
</div>

<footer class="footer">2026 JetProduct Inc. - Built for Developers</footer>

<script src="app.js"></script>
<script>
document.getElementById("form").onsubmit=e=>{
e.preventDefault();
guardarProducto({
nombre:nombre.value,
precio:Number(precio.value),
descripcion:descripcion.value,
imagen:imagen.value,
estado:estado.value==="true"
});
location.href="show.html";
}
</script>
</body>
</html>
