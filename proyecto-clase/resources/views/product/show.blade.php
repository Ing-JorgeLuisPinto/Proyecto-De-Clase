<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Administración de Productos</title>
<link rel=stylesheet href="{{ asset('css/style.css') }}">


</head>
<body>
<h1>Gestión de Productos</h1>
<div class="table-container">
<table>
<thead>
<tr>
<th><input type="checkbox" id="selectAll"></th>
<th>ID</th>
<th>Imagen</th>
<th>Nombre</th>
<th>Precio</th>
<th>Descripción</th>
<th>Estado</th>
<th>Acciones</th>
</tr>
</thead>
<tbody id="tbody"></tbody>
</table>
</div>
<script>
const productos=[
{id:1,nombre:'Audífonos Gamer',precio:180000,descripcion:'Sonido envolvente RGB',imagen:'https://images.unsplash.com/photo-1518441902113-c2f9c4a2f4f7?w=200',estado:true},
{id:2,nombre:'Teclado Mecánico',precio:250000,descripcion:'Switch azul ultra preciso',imagen:'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=200',estado:true},
{id:3,nombre:'Mouse Pro',precio:120000,descripcion:'Sensor 16000 DPI',imagen:'https://images.unsplash.com/photo-1587202372775-e229f172b9d7?w=200',estado:false},
{id:4,nombre:'Monitor 27',precio:980000,descripcion:'144Hz Full HD',imagen:'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=200',estado:true}
];

const tbody=document.getElementById('tbody');
productos.forEach(p=>{
 const tr=document.createElement('tr');
 tr.innerHTML=`
 <td><input type="checkbox" class="check"></td>
 <td>${p.id}</td>
 <td><img src="${p.imagen}"></td>
 <td>${p.nombre}</td>
 <td>$${p.precio.toLocaleString()}</td>
 <td>${p.descripcion}</td>
 <td><span class="badge ${p.estado?'activo':'inactivo'}">${p.estado?'Activo':'Inactivo'}</span></td>
 <td>
   <button class="btn edit">Editar</button>
   <button class="btn delete">Eliminar</button>
 </td>`;
 tbody.appendChild(tr);
});

// seleccionar fila
tbody.addEventListener('change',e=>{
 if(e.target.classList.contains('check')){
   const row=e.target.closest('tr');
   row.classList.toggle('selected',e.target.checked);
 }
});

// seleccionar todo
const selectAll=document.getElementById('selectAll');
selectAll.addEventListener('change',()=>{
 document.querySelectorAll('.check').forEach(c=>{
   c.checked=selectAll.checked;
   c.dispatchEvent(new Event('change'));
 });
});
</script>
</body>
</html>