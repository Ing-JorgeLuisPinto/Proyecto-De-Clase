<!DOCTYPE html>
<html lang="es">
<head>
    
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Listado de Productos</title>
<link rel=stylesheet href="{{ asset('css/style.css') }}">

</head>
<body>
<header>Catálogo de Productos</header>
<div class="container" id="products"></div>
<script>
const data=[
 {name:"Audífonos Gamer",price:180000,desc:"Sonido envolvente RGB",img:"https://images.unsplash.com/photo-1518441902113-c2f9c4a2f4f7?w=800"},
 {name:"Teclado Mecánico",price:250000,desc:"Switch azul ultra preciso",img:"https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=800"},
 {name:"Mouse Pro",price:120000,desc:"Sensor 16000 DPI",img:"https://images.unsplash.com/photo-1587202372775-e229f172b9d7?w=800"},
 {name:"Monitor 27''",price:980000,desc:"144Hz Full HD",img:"https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=800"},
 {name:"Webcam HD",price:140000,desc:"Ideal para streaming",img:"https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=800"},
 {name:"Silla Gamer",price:750000,desc:"Comodidad ergonómica",img:"https://images.unsplash.com/photo-1598300053653-5c1b6ad72037?w=800"}
];
const container=document.getElementById('products');
data.forEach(p=>{
 const card=document.createElement('div');
 card.className='card';
 card.innerHTML=`
  <img src="${p.img}" alt="${p.name}">
  <div class="title">${p.name}</div>
  <div class="desc">${p.desc}</div>
  <div class="price">$${p.price.toLocaleString()}</div>
  <button class="btn">Agregar al carrito</button>`;
 container.appendChild(card);
});
</script>
</body>
</html>