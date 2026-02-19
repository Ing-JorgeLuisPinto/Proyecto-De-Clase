<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
<h1>Catálogo</h1>
<div class="grid" id="grid"></div>
</div>

<footer class="footer">2026 JetProduct Inc. - Built for Developers</footer>

<script>

// ---------- BASE DE DATOS LOCAL ----------
const productosIniciales=[
{id:1,nombre:"Audífonos Gamer",precio:180000,descripcion:"Sonido envolvente RGB",imagen:"https://images.unsplash.com/photo-1518441902113-c2f9c4a2f4f7?w=800",estado:true},
{id:2,nombre:"Teclado Mecánico",precio:250000,descripcion:"Switch azul ultra preciso",imagen:"https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=800",estado:true},
{id:3,nombre:"Mouse Pro",precio:120000,descripcion:"Sensor 16000 DPI",imagen:"https://images.unsplash.com/photo-1587202372775-e229f172b9d7?w=800",estado:false},
{id:4,nombre:"Monitor 27''",precio:980000,descripcion:"144Hz Full HD",imagen:"https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=800",estado:true},
{id:5,nombre:"Webcam HD",precio:140000,descripcion:"Ideal para streaming",imagen:"https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=800",estado:true},
{id:6,nombre:"Silla Gamer",precio:750000,descripcion:"Comodidad ergonómica",imagen:"https://images.unsplash.com/photo-1598300053653-5c1b6ad72037?w=800",estado:true}
];

// crear DB si no existe
if(!localStorage.getItem("productos")){
localStorage.setItem("productos",JSON.stringify(productosIniciales));
}

// obtener productos
function obtenerProductos(){
return JSON.parse(localStorage.getItem("productos")) || [];
}

// pintar productos
const grid=document.getElementById("grid");
obtenerProductos().forEach(p=>{
grid.innerHTML+=`
<div class="card">
<img src="${p.imagen}">
<h3>${p.nombre}</h3>
<div class="price">$${Number(p.precio).toLocaleString()}</div>
<p>${p.descripcion}</p>
</div>`;
});

</script>

</body>
</html>
