<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Listado de Productos</title>
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
  min-height:100vh;
}
header{
  text-align:center;
  padding:40px 20px;
  font-size:2.5rem;
  font-weight:800;
  background:linear-gradient(90deg,var(--primary),var(--secondary),var(--accent));
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
}
.container{
  max-width:1200px;
  margin:auto;
  padding:20px;
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
  gap:25px;
}
.card{
  background:var(--card);
  border-radius:20px;
  padding:20px;
  position:relative;
  overflow:hidden;
  transition:.4s ease;
  border:1px solid rgba(255,255,255,.05);
}
.card::before{
  content:"";
  position:absolute;
  inset:-2px;
  background:linear-gradient(120deg,var(--primary),var(--secondary),var(--accent));
  z-index:-1;
  filter:blur(18px);
  opacity:0;
  transition:.4s;
}
.card:hover::before{opacity:.8}
.card:hover{transform:translateY(-10px) scale(1.02)}
.card img{
  width:100%;
  height:200px;
  object-fit:cover;
  border-radius:15px;
}
.title{font-size:1.3rem;font-weight:600;margin:15px 0 5px}
.desc{opacity:.7;font-size:.9rem}
.price{
  font-size:1.5rem;
  font-weight:800;
  margin:15px 0;
  color:var(--secondary);
}
.btn{
  display:block;
  width:100%;
  padding:12px;
  border:none;
  border-radius:12px;
  font-weight:600;
  cursor:pointer;
  background:linear-gradient(90deg,var(--primary),var(--accent));
  color:white;
  transition:.3s;
}
.btn:hover{filter:brightness(1.3);letter-spacing:1px}
</style>
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