<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Administración de Productos</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
<style>
:root{
  --primary:#6C5CE7;
  --secondary:#00F5D4;
  --accent:#FF006E;
  --dark:#0f172a;
  --card:#111827;
}
*{box-sizing:border-box;margin:0;padding:0}
body{
  font-family:'Poppins',sans-serif;
  background:linear-gradient(135deg,#020617,#0f172a,#020617);
  color:white;
  padding:25px;
}

h1{
  text-align:center;
  margin-bottom:25px;
  font-size:2rem;
  font-weight:800;
  background:linear-gradient(90deg,var(--primary),var(--secondary),var(--accent));
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
}

.table-container{
  background:var(--card);
  border-radius:18px;
  padding:20px;
  box-shadow:0 15px 35px rgba(0,0,0,.45);
  border:1px solid rgba(255,255,255,.05);
}

table{width:100%;border-collapse:separate;border-spacing:0 10px}

thead tr{
  background:linear-gradient(90deg,var(--primary),var(--accent));
}

th,td{padding:14px 12px;text-align:left;font-size:.95rem}

th:first-child{border-top-left-radius:12px}
th:last-child{border-top-right-radius:12px}

tbody tr{
  background:#0b1220;
  transition:.25s ease;
  box-shadow:0 6px 14px rgba(0,0,0,.35);
}

tbody tr:hover{
  transform:translateY(-3px) scale(1.01);
  box-shadow:0 12px 28px rgba(0,0,0,.6);
}

.selected{
  outline:2px solid var(--secondary);
  background:rgba(0,245,212,.08);
}

img{width:60px;height:60px;object-fit:cover;border-radius:10px}

.badge{padding:6px 12px;border-radius:20px;font-size:.8rem;font-weight:700}
.activo{background:rgba(0,245,212,.15);color:var(--secondary)}
.inactivo{background:rgba(255,0,110,.15);color:var(--accent)}

.btn{
  padding:6px 12px;
  border:none;
  border-radius:8px;
  cursor:pointer;
  font-size:.8rem;
  font-weight:600;
  color:white;
  transition:.25s;
}

.edit{background:linear-gradient(90deg,var(--primary),var(--secondary))}
.delete{background:linear-gradient(90deg,var(--accent),#ff4d4d)}

.btn:hover{filter:brightness(1.3);letter-spacing:.5px}

.check{width:18px;height:18px;cursor:pointer}
</style>
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